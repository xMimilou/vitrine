<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navbar extends Component
{
    public $currentRouteName;

    public function __construct($currentRouteName)
    {
        $this->currentRouteName = $currentRouteName;
    }

    public function render()
    {
        return view('components.navbar');
    }
}

?>