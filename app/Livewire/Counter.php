<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;
    public ?int $number = null;

    public function changeCount(): void
    {
        $this->validate([
            'number' => ['required', 'integer'],
        ]);

        $this->count += (int) $this->number;

        // limpa o campo depois de somar
        $this->reset('number');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
