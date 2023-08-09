<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if(Auth::user()->hasRole('admin'))
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
            @endif

            <div class="p-4 sm:p-8 bg-slate-600 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-slate-600 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-slate-600 shadow sm:rounded-lg">

                <h2 class="text-lg font-medium text-white pb-1">
                    {{ __('Update Profile Image') }}
                </h2>

                <p class="mt-1 text-sm text-white pb-7">
                    {{ __('Upload an Image of your choosing.') }}
                </p>

                <!-- Store Profile Image -->
                <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="profile_picture" id="profile_picture" class="text-white">
                    @if ($user->profile_picture)
                        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="rounded-full w-20 h-20 m-4">
                    @else
                        <div class="rounded-full w-20 h-20 bg-gray-300 flex items-center justify-center m-4">
                            <span class="text-gray-600 text-2xl">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                        </div>
                    @endif

                    @error('image')
                        <span role="alert">
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                    @enderror

                    <button
                        type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        {{ __('Upload Profile') }}
                    </button>

                </form>
            </div>

            <div class="p-4 sm:p-8 bg-slate-600 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
