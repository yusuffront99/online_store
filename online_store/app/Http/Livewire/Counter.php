<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 2;
 
    public function increment()
    {
        $this->count++;
    }

    public function root()
    {
        $this->count*=2;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
