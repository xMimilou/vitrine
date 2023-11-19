<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Request;


class FolderList extends Component
{
    public $folders;

    public function __construct($limit = false, $perPage = 9, $page = null)
    {
        $directory = storage_path('public/album');

        // Retrieve the list of directories in $directory
        $directories = Storage::directories('public/album');

        // Sort directories by last modification date (from most recent to oldest)
        usort($directories, function ($a, $b) {
            return Storage::lastModified($b) - Storage::lastModified($a);
        });

        if ($limit) {
            $directories = array_slice($directories, 0, 3);
        }

        // Convert directories to a collection
        $collection = collect($directories)->map(function ($folder) use ($directory) {
            // Build the full path to the _info.data file
            $infoFilePath = $folder . '/_info.data';

            // Read the contents of the _info.data file
            $infoContents = Storage::exists($infoFilePath) ? Storage::get($infoFilePath) : null;

            // Decode the JSON contained in the _info.data file
            $info = $infoContents ? json_decode($infoContents, true) : [];

            return [
                'name' => basename($folder),
                'creation_date' => Storage::lastModified($folder),
                'location' => $info['location'] ?? 'Unknown',
                'main_image' => $info['main_image'] ?? 'default.jpg'
            ];
        });

        // Determine the current page
        $page = $page ?: (Request::input('page', 1) - 1);
        $offset = $page * $perPage;

        // Create a LengthAwarePaginator instance
        $this->folders = new LengthAwarePaginator(
            $collection->slice($offset, $perPage)->values(),
            $collection->count(),
            $perPage,
            $page + 1, // Page index is 1-based
            ['path' => Request::url(), 'query' => Request::query()]
        );
    }

    public function render()
    {
        return view('components.folderList', ['folders' => $this->folders]);
    }
}
