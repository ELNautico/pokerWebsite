<x-app-layout>
    <div class="py-6 bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Form to create new money history -->
                <div class="p-4 bg-gray-800 text-white flex justify-center mb-4">
                    @if ($user->money >= 0)
                        <p class="text-lg">Dein Profit insgesamt: <span class="text-green-500 font-bold">{{ $user->money }}€</span></p>
                    @else
                        <p class="text-lg">Dein Verlust insgesamt: <span class="text-red-500 font-bold">{{ $user->money }}€</span></p>
                    @endif
                </div>
                <div class="p-6 bg-gray-700 rounded-lg shadow-md mb-6">
                    <form action="{{ route('money_history.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="date_of_transaction" class="block text-sm font-medium text-gray-300 mb-1">Date of Transaction</label>
                            <input type="date" name="date_of_transaction" id="date_of_transaction" class="mt-1 block bg-slate-300 w-full rounded-md shadow-sm" value="{{ $game->start_date->format('Y-m-d') }}"required>
                            @error('date_of_transaction')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 flex space-x-4">
                            <div class="flex-1">
                                <label for="buy_in" class="block text-sm font-medium text-gray-300 mb-1">Eingezahlt</label>
                                <input type="number" step="0.01" name="buy_in" id="buy_in" class="mt-1 block bg-slate-300 w-full rounded-md shadow-sm" required>
                                @error('buy_in')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label for="payed_out" class="block text-sm font-medium text-gray-300 mb-1">Rausgegangen mit:</label>
                                <input type="number" step="0.01" name="payed_out" id="payed_out" class="mt-1 block bg-slate-300 w-full rounded-md shadow-sm" required>
                                @error('payed_out')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Add Transaction</button>
                        </div>
                    </form>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6" id="moneyHistoryWrapper">
                    @foreach ($money_history->sortByDesc('date_of_transaction') as $transaction)
                        <div class="money-history-entry p-6 bg-gray-700 rounded-lg shadow-md mb-4">
                            <div class="text-white mb-2">
                                <strong class="text-blue-300">Date:</strong> {{ $transaction->date_of_transaction->formatLocalized('%e. %B \'%y') }}
                            </div>
                            <div class="text-white mb-2">
                                <strong class="text-blue-300">Buy-In:</strong> {{ $transaction->buy_in }}€
                            </div>
                            <div class="text-white mb-2">
                                <strong class="text-blue-300">Ausbezahlt:</strong> {{ $transaction->payed_out }}€
                            </div>
                            <hr class="my-2 border-gray-300"> <!-- Add a line separator -->
                            @php
                                $difference = $transaction->payed_out - $transaction->buy_in;
                                $differenceColor = $difference >= 0 ? 'text-green-500' : 'text-red-500';
                                $differenceLabel = $difference >= 0 ? 'Gewinn:' : 'Verlust:';
                            @endphp
                            <p class="text-white"><strong>{{ $differenceLabel }}</strong> <span class="{{ $differenceColor }} font-bold">{{ $difference }}€</span></p>
                        </div>
                    @endforeach
                </div>
                <div class="p-6 rounded-lg mb-4 flex justify-center">
                    <button id="showAllButton" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Show All Transactions</button>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const showAllButton = document.getElementById('showAllButton');
        const moneyHistoryWrapper = document.getElementById('moneyHistoryWrapper');

        const transactions = moneyHistoryWrapper.querySelectorAll('.money-history-entry');
        let allTransactionsVisible = false;

        // Hide all transactions except the first two initially
        for (let i = 2; i < transactions.length; i++) {
            transactions[i].style.display = 'none';
        }

        showAllButton.addEventListener('click', function () {
            allTransactionsVisible = !allTransactionsVisible; // Toggle visibility

            for (let i = 2; i < transactions.length; i++) {
                transactions[i].style.display = allTransactionsVisible ? 'block' : 'none';
            }

            showAllButton.textContent = allTransactionsVisible ? 'Hide Transactions' : 'Show All Transactions';
        });
    });
</script>
