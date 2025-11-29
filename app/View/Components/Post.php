<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    /**
     * Create a new component instance.
     */
    public $action;
    public $namevalue;
    public $descvalue;
    public function __construct($action=null,$namevalue=null,$descvalue=null )
    {
        $this->action=$action;
        $this->namevalue=$namevalue;
        $this->descvalue=$descvalue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.post');
    }
}
