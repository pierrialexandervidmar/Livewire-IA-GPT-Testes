<?php

namespace App\Livewire;

use Livewire\Component;

class Lazy extends Component
{
    public function mount()
    {
        sleep(3);
    }

    public function placeholder(): string
    {
        return <<<'HTML'
        <div class="flex flex-col items-center justify-center py-16 text-center">
            <div class="flex items-center justify-center w-12 h-12 rounded-full border-4 border-emerald-500 border-t-transparent animate-spin"></div>

            <h1 class="mt-6 text-2xl font-semibold text-slate-100">
                Carregando componente...
            </h1>

            <p class="mt-2 text-sm text-slate-400">
                Aguarde só um instante enquanto buscamos os dados.
            </p>
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.lazy');
    }
}
