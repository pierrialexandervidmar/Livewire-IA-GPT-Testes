<div>
    <h1>Hello do counter</h1>


    <input type="number" wire:model.blur="number" />

    <button wire:click="changeCount({{ $number }})">Somar</button>

    {{ $count }}
</div>
