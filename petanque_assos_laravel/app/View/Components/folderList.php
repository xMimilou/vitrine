<?php 
namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use finfo;

class FolderList extends Component
{
    public $folders;

    public function __construct()
    {
        $directory = storage_path('public/album');

        
        // Récupérer la liste des dossiers dans le dossier $directory
        $directories = Storage::directories('public/album');
        

        $this->folders = collect($directories)->map(function ($folder) use ($directory) {
            // Construire le chemin complet vers le fichier _info.data
            $infoFilePath = $folder . '/_info.data';
            
            // Lire le contenu du fichier _info.data
            $infoContents = Storage::exists($infoFilePath) ? Storage::get($infoFilePath) : null;
            
            // Décoder le JSON contenu dans le fichier _info.data
            $info = $infoContents ? json_decode($infoContents, true) : [];

            return [
                'name' => basename($folder),
                'creation_date' => Storage::lastModified($folder),
                'location' => $info['location'] ?? 'Unknown',
                'main_image' => $info['main_image'] ?? 'default.jpg'
            ];
        });
    }

    public function render()
    {
        return view('components.folderList');
    }
}

?>