<?php

namespace App\View\Components;

use Illuminate\View\Component;

class imgCard extends Component
{
    public $imgName;
    public $lastModifiedTime;
    public $imgAlbum;

    public function __construct($imgName,$date, $imgAlbum)
    {
        $this->imgName = $imgName;
        $this->lastModifiedTime = $date;
        $this->imgAlbum = $imgAlbum;
    }

    public function render()
    {
        return view('components.imgCard');
    }
}


?>