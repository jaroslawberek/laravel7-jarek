<?php

namespace App\View\Components\Crud\Table;

use Illuminate\View\Component;

class Table extends Component
{

    public $headers;
    public $searchs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headers,$searchs)
    {
        $this->headers = $headers;
        $this->searchs = $searchs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.crud.table.table');
    }
}
