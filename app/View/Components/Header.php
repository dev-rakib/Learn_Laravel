<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $NavName;
    public $NavLink;
    public $LinkName;
    public function __construct($NavName=null,$NavLink=null,$LinkName=null)
    {
        $this->NavName=$NavName;
        $this->NavLink=$NavLink;
        $this->LinkName=$LinkName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.header');
    }
}