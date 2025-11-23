<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;
    public int $number;

    public function changeCount(int $number)
    {
        $this->count = $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
