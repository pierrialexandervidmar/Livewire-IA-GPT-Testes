<div>
    <h1 class="text-3xl font-bold tracking-tight">Send an Event</h1>
    <input type="text" wire:model="message" placeholder="Type your message here"
        class="mt-4 block w-full rounded-md border-0 bg-slate-900/50 px-3.5 py-2 text-slate-200 shadow-sm ring-1 ring-inset ring-slate-700 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6" />
    <br>
    <button
        class="inline-flex items-center gap-2 rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-slate-900 shadow-md hover:bg-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-slate-900 disabled:opacity-60"
        wire:click="sendEvent">Enviar Mensagem bixo!</button>
    <button
        class="inline-flex items-center gap-2 rounded-lg bg-emerald-500 px-4 py-2 text-sm font-semibold text-slate-900 shadow-md hover:bg-emerald-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 focus:ring-offset-slate-900 disabled:opacity-60"
        wire:click="resetComponent">Reset</button>
    <br>
    <br>

</div>
