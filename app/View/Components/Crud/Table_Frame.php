<?php

namespace App\View\Components\Crud;

use Illuminate\View\Component;

class Table_Frame extends Component
{

    public $title;
    public $routeCreate;
    public $onCreate;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $routeCreate, $onCreate)
    {
        $this->title = $title;
        $this->routeCreate = $routeCreate;
        $this->onCreate = $onCreate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.crud.table');
    }
}
