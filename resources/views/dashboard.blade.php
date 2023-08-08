<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-600 overflow-hidden shadow-sm sm:rounded-lg">
                <x-poker-table />
            </div>
        </div>
    </div>
</x-app-layout>
