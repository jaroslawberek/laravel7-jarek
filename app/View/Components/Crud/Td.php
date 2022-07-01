<?php

namespace App\View\Components\Crud;

use Illuminate\View\Component;

class Td extends Component
{
    public $align;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($align='')
    {
        $this->align = $align;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.crud.td');
    }
}
