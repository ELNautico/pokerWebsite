<x-app-layout>
    <div class="py-6 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 sm:p-8 bg-slate-600 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <h2 class="text-lg font-medium text-white pb-1">
                            {{ __('Update Game Specs') }}
                        </h2>

                        <p class="mt-1 text-sm text-white pb-7">
                            {{ __('Bitte gib die Daten für das nächste Game an.') }}
                        </p>

                        <form method="POST" action="{{ route('game.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="flex justify-start">
                                <div class="mb-5 mr-10">
                                    <x-input-label for="start_date" :value="__('Start Datum')" class="mb-2"></x-input-label>
                                    <input type="date" name="start_date" id="start_date" class="bg-slate-500 text-white">
                                </div>
                                <div class="mr-10">
                                    <x-input-label for="time" :value="__('Time')" class="mb-2"></x-input-label>
                                    <x-text-input id="time" name="time" type="text" class="mt-1 block py-2.5"></x-text-input>
                                </div>
                                <div>
                                    <x-input-label for="buy_in" :value="__('Buy-In')" class="mb-2"></x-input-label>
                                    <x-text-input id="buy_in" name="buy_in" type="number" class="mt-1 block"></x-text-input>
                                </div>
                            </div>

                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 sm:p-8 bg-slate-600 shadow sm:rounded-lg">
                    <h1 class="text-white font-bold mb-4">Erstelle einen User</h1>
                    <form action="{{ route('admin.create.user') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block bg-slate-300 w-full rounded-md shadow-sm" required>
                            @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 flex space-x-4">
                            <div class="flex-1">
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                                <input type="text" step="0.01" name="email" id="email" class="mt-1 block bg-slate-300 w-full rounded-md shadow-sm" required>
                                @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Passwort</label>
                                <input type="text" step="0.01" name="password" id="password" class="mt-1 block bg-slate-300 w-full rounded-md shadow-sm" required>
                                @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">User hinzufügen</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
