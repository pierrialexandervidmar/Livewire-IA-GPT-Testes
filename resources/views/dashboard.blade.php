<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- @livewire('chat-bot') --}}
                    @livewire('bird-form')
                    {{-- <div>
                        <livewire:send-event />
                    </div>
                    <div>
                        <livewire:receive-event />
                    </div> --}}
                    {{-- <livewire:lazy lazy />

                    <hr>
                    <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Here's some other content on the page that loads immediately.
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
