<div class="min-h-screen bg-slate-900 text-slate-100 py-10">
    <div class="max-w-xl mx-auto px-4 space-y-6">

        {{-- Cabeçalho --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight">Chat com o Bot</h1>
                <p class="text-sm text-slate-400 mt-1">
                    Faça uma pergunta e veja o histórico de conversas abaixo.
                </p>
            </div>

            <span
                class="inline-flex items-center rounded-full bg-indigo-500/10 px-3 py-1 text-xs font-semibold text-indigo-300 border border-indigo-500/30">
                Livewire • AI
            </span>
        </div>

        {{-- Mensagens --}}
        <div
            class="bg-slate-800/80 border border-slate-700 rounded-2xl p-4 shadow-lg max-h-[60vh] overflow-y-auto space-y-3">
            @forelse ($messages as $interaction)
                <div class="space-y-2 rounded-2xl border border-slate-700 bg-slate-900/60 px-4 py-3 text-sm">
                    <div>
                        <p class="text-xs font-semibold text-emerald-300 uppercase tracking-wide mb-1">
                            You
                        </p>
                        <p class="text-slate-100">
                            {{ $interaction->question }}
                        </p>
                    </div>

                    <div class="border-t border-slate-700/70 pt-2 mt-2">
                        <p class="text-xs font-semibold text-indigo-300 uppercase tracking-wide mb-1">
                            Bot
                        </p>
                        <p class="text-slate-100">
                            {{ $interaction->answer }}
                        </p>
                    </div>

                    @if ($interaction->created_at)
                        <p class="text-[11px] text-slate-500 text-right mt-1">
                            {{ $interaction->created_at->format('d/m/Y H:i') }}
                        </p>
                    @endif
                </div>
            @empty
                <p class="text-sm text-slate-400">
                    Nenhuma mensagem ainda. Envie a primeira pergunta abaixo 👇
                </p>
            @endforelse
        </div>

        {{-- Formulário --}}
        <form wire:submit.prevent="askQuestion"
            class="bg-slate-800/80 border border-slate-700 rounded-2xl p-4 shadow-lg space-y-3">
            <label for="question" class="block text-sm font-medium text-slate-200">
                Sua pergunta
            </label>

            <div class="flex gap-3">
                <input id="question" type="text" wire:model="question" placeholder="Type your question here..."
                    class="flex-1 rounded-lg border border-slate-600 bg-slate-900/60 px-3 py-2 text-sm placeholder-slate-500 focus:border-indigo-500 focus:ring-indigo-500 outline-none"
                    required />

                <button type="submit"
                    class="inline-flex items-center rounded-lg bg-indigo-500 px-4 py-2 text-sm font-semibold text-slate-900 shadow-md hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-slate-900 disabled:opacity-60"
                    wire:loading.attr="disabled">
                    <span wire:loading.remove>Ask</span>
                    <span wire:loading>Enviando...</span>
                </button>
            </div>

            @error('question')
                <p class="text-xs text-red-400 mt-1">{{ $message }}</p>
            @enderror
        </form>

    </div>
</div>
