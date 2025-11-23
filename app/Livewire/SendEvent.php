<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class SendEvent extends Component
{
    public string $message = '';

    public function sendEvent()
    {
        $this->dispatch('eventFromSendEvent', $this->message);
        $this->message = '';
    }

    public function resetComponent()
    {
        $this->message = '';
        $this->dispatch('resetComponent');
    }

    public function render()
    {
        return view('livewire.send-event');
    }
}
