<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GalleryCard extends Component
{
    public $galerieName;
    public $image;
    public $location;
    public $date;

    public function __construct($galerieName, $image, $location, $date)
    {
        $this->galerieName = $galerieName;
        $this->image = $image;
        $this->location = $location;
        $this->date = $date;
    }

    public function render()
    {
        return view('components.gallery-card');
    }
}

?>