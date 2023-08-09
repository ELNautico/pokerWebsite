<div class="bg-gray-800 text-white p-4">
    <div class="flex justify-center">
        <h2 class="text-2xl font-semibold uppercase underline pb-2">Poker Game Overview:</h2>
    </div>
    <div class="flex justify-center mr-5 mt-1">
        <p><span class="font-bold text-lg">Datum:</span>
            @php
                \Carbon\Carbon::setLocale('de'); // Set the locale to German
                $formattedDate = $game->start_date->isoFormat('dddd D. MMMM YYYY');
                \Carbon\Carbon::setLocale(app()->getLocale()); // Reset the locale to the original
            @endphp
            {{ $formattedDate }}
        </p>
        <p><span class="font-bold text-lg ml-6">Zeit:</span> {{ $game->time }}</p>
        <p><span class="font-bold text-lg ml-6">Buy-in:</span> {{ $game->buy_in }}€</p>
    </div>
</div>
