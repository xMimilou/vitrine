<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class Pagination extends Component
{
    // count number of folders in storage_path('public/album'); and return count of folders

    public $pages;
    public $page;
    public function __construct($perPage = 9, $page = null)
    {
        $directory = storage_path('public/album');
        $directories = Storage::directories('public/album');
        $this->pages = count($directories);
        $this->pages = ceil($this->pages / $perPage);
        $this->page = $page;
        
        
    }

    public function render()
    {
        return view('components.pagination', ['pages' => $this->pages, 'page' => $this->page]);
    }
}
