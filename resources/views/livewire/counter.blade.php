<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-slate-900 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-slate-100 space-y-6">

                <header class="space-y-1">
                    <h1 class="text-3xl font-bold tracking-tight">
                        Counter
                    </h1>
                    <p class="text-sm text-slate-400">
                        Informe um número e some ao contador atual.
                    </p>
                </header>

                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row gap-3 items-start sm:items-end">
                        <div class="flex-1">
                            <label for="number" class="block text-sm font-medium text-slate-300">
                                Número para somar
                            </label>

                            <input id="number" type="number" wire:model.blur="number" placeholder="Ex: 5"
                                class="mt-1 block w-full rounded-md border-0 bg-slate-800 px-3.5 py-2 text-slate-100 shadow-sm ring-1 ring-inset ring-slate-700 placeholder:text-slate-500 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm">
                            @error('number')
                                <p class="mt-1 text-xs text-rose-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="button" wire:click="changeCount"
                            class="inline-flex items-center justify-center rounded-md bg-emerald-500 px-4 py-2 text-sm font-semibold text-slate-900 shadow-sm hover:bg-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-slate-900">
                            Somar
                        </button>
                    </div>

                    <div class="pt-4 border-t border-slate-800">
                        <p class="text-sm text-slate-400">
                            Valor atual do contador:
                        </p>
                        <p class="mt-1 text-3xl font-semibold text-emerald-400">
                            {{ $count }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
