<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Request;


class AdminAnnonces extends Component
{
    public $annonces;

    public function __construct()
    {
        // open file in storage/app/public/annonces.json
        $file = storage_path('public/annonces.json');
        print_r($file);
        $json = json_decode(file_get_contents($file), true);
        // return all json data in $annonces
        $this->annonces = $json;
        print_r($this->annonces);
        print_r("--------------------");

        
    }

    public function render()
    {
        return view('components.adminannonces');
    }
}
