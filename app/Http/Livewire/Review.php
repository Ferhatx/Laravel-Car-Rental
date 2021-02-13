<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Review extends Component
{
 public $record,$subject,$review ;

    public function render()
    {
        return view('livewire.review');
    }
}
