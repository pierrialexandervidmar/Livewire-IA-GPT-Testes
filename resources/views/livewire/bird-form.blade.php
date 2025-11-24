<div class="min-h-screen bg-slate-900 text-slate-100 py-10">
    <div class="max-w-2xl mx-auto px-4 space-y-8">

        {{-- Cabeçalho --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold tracking-tight">Bird Tracker</h1>
                <p class="text-sm text-slate-400 mt-1">
                    Registre quantos pássaros você viu e deixe algumas notas.
                </p>
            </div>

            <span
                class="inline-flex items-center rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-300 border border-emerald-500/30">
                Livewire • Tailwind
            </span>
        </div>

        {{-- Formulário --}}
        <form wire:submit.prevent="submit"
            class="bg-slate-800/80 border border-slate-700 rounded-2xl p-6 shadow-lg space-y-4">

            <div class="space-y-1">
                <label for="bird_count" class="block text-sm font-medium text-slate-200">
                    Quantidade de pássaros
                </label>
                <input wire:model.defer="bird_count" id="bird_count" type="number" min="0"
                    class="block w-full rounded-lg border border-slate-600 bg-slate-900/60 px-3 py-2 text-sm placeholder-slate-500 focus:border-emerald-500 focus:ring-emerald-500 outline-none"
                    placeholder="Ex: 5">
                @error('bird_count')
                    <p class="text-xs text-red-400 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label for="notes" class="block text-sm font-medium text-slate-200">
                    Notas
                </label>
                <textarea wire:model.defer="notes" id="notes" rows="3"
                    class="block w-full rounded-lg border border-slate-600 bg-slate-900/60 px-3 py-2 text-sm placeholder-slate-500 focus:border-emerald-500 focus:ring-emerald-500 outline-none resize-y"
                    placeholder="Algo interessante que você notou?"></textarea>
                @error('notes')
                    <p class="text-xs text-red-400 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="inline-flex items-center gap-2 rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-slate-900 shadow-md hover:bg-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-slate-900 disabled:opacity-60"
                    wire:loading.attr="disabled">
                    <span wire:loading.remove>Add a new bird</span>
                    <span wire:loading>Salvando...</span>
                </button>
            </div>
        </form>

        {{-- Lista de entries --}}
        <div class="bg-slate-800/80 border border-slate-700 rounded-2xl p-6 shadow-lg">
            <h2 class="text-lg font-semibold mb-4">Entries</h2>

            @if ($entries->isEmpty())
                <p class="text-sm text-slate-400">
                    Nenhum registro ainda. Comece adicionando o primeiro pássaro acima 🐦
                </p>
            @else
                <div class="space-y-3">
                    @foreach ($entries as $entry)
                        <div wire:key="entry-{{ $entry->id }}" wire:transition
                            class="rounded-xl border border-slate-700 bg-slate-900/60 px-4 py-3 text-sm flex flex-col gap-1">
                            <div class="flex items-center justify-between">
                                <div class="font-semibold text-emerald-300">
                                    Bird Count: {{ $entry->bird_count }}
                                </div>
                                <span class="text-xs text-slate-400">
                                    {{ $entry->created_at->format('d/m/Y H:i') }}
                                </span>
                            </div>

                            @if ($entry->notes)
                                <div class="text-slate-200">
                                    <span class="font-medium text-slate-300">Notes:</span>
                                    {{ $entry->notes }}
                                </div>
                            @endif

                            <button wire:click="delete({{ $entry->id }})"
                                class="self-end text-xs text-red-400 hover:underline focus:outline-none">
                                Delete
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
</div>
