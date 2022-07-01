<?php
namespace App\Helpers;

class TextAlignment{
    private  $align;

    public function __construct($align = 'left'){
       $this->align = $align;
    }

    public function className()
    {
        return [
            'left' =>'text-left',
            'center' =>'text-center',
            'right' =>'text-right',
            ][$this->align] ?? 'text-left';
    }
    
}