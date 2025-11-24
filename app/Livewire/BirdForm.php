<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{

    public int $bird_count;
    public string $notes = '';

    protected function rules()
    {
        return [
            'bird_count' => 'required|integer',
            'notes' => 'nullable|string|max:1000',
        ];
    }

    public function submit()
    {
        $this->validate();

        Entry::create(
            $this->only(['bird_count', 'notes'])
        );

        $this->reset();
    }

    public function delete($entryId)
    {
        $entry = Entry::find($entryId);

        if ($entry) {
            $entry->delete();
        }
    }


    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::latest()->get(),
        ]);
    }
}
