{{-- resources/views/livewire/lazy.blade.php --}}
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-slate-900 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-slate-100">
                <h1 class="text-3xl font-bold tracking-tight">
                    Lazy Component
                </h1>

                <p class="mt-4 text-lg text-gray-300">
                    This component took 3 seconds to load because of the sleep in the mount method.
                    <span class="block mt-2 text-sm text-slate-400">
                        {{ now() }}
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
