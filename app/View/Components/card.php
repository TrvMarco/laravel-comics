<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{   
    public $image;
    public $title; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image,$title)
    {
        $this->image = $image;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
