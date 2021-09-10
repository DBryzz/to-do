<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Step extends Component
{
    public $steps = 0;

    public function increment()
    {
        # code...
        $this->steps++;
    }

    public function decrement()
    {
        # code...
        $this->steps--;
    }

    public function render()
    {
        return view('livewire.step');
    }
}
