<?php

namespace App\View\Components\Crud\Table;

use Illuminate\View\Component;
use App\Helpers\TextAlignment;

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
        $this->headers = $this->formatHeader($headers);
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

    private function formatHeader($headers){

        return array_map(function($header){
            $name = is_array($header) ? $header['name']: $header;
            return [
                'name'=>$name,
                'classes' => $this->textAlignmentClasses($header['align'] ?? 'left')
            ];
        },$headers);

    }

    private function textAlignmentClasses($align){
        return (new TextAlignment($align))->className();
    }
}
