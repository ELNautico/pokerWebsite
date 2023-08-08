<div class="mx-auto h-auto relative">
    <svg id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 861.96 521.18"><defs><style>.cls-1{opacity:.5;}.cls-1,.cls-2,.cls-3{fill:none;}.cls-4{fill:#fff;}.cls-2{stroke:url(#Unbenannter_Verlauf_28);}.cls-2,.cls-3{stroke-miterlimit:10;stroke-width:16px;}.cls-5{fill:url(#Unbenannter_Verlauf_19);}.cls-3{stroke:gold;}</style><radialGradient id="Unbenannter_Verlauf_19" cx="422.67" cy="261.83" fx="422.67" fy="261.83" r="239.91" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0d5a2c"/><stop offset=".37" stop-color="#0b5529"/><stop offset=".8" stop-color="#084621"/><stop offset="1" stop-color="#063e1d"/></radialGradient><radialGradient id="Unbenannter_Verlauf_28" cx="422.67" cy="261.83" fx="422.67" fy="261.83" r="247.46" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#392318"/><stop offset=".17" stop-color="#3d251a"/><stop offset=".36" stop-color="#4c2e21"/><stop offset=".51" stop-color="#5c382a"/><stop offset=".79" stop-color="#4c2a20"/><stop offset="1" stop-color="#3f1f17"/></radialGradient></defs><path class="cls-5" d="m729.17,261.83c0,80.36-65.14,145.5-145.5,145.5h-322c-80.36,0-145.5-65.14-145.5-145.5s65.14-145.5,145.5-145.5h322c80.36,0,145.5,65.14,145.5,145.5Z"/><g class="cls-1"><path class="cls-4" d="m551.75,173.36c63.77,0,115.65,39.69,115.65,88.47s-51.88,88.47-115.65,88.47h-258.15c-63.77,0-115.65-39.69-115.65-88.47s51.88-88.47,115.65-88.47h258.15m0-1h-258.15c-64.43,0-116.65,40.06-116.65,89.47s52.22,89.47,116.65,89.47h258.15c64.43,0,116.65-40.06,116.65-89.47s-52.22-89.47-116.65-89.47h0Z"/></g><g class="cls-1"><path class="cls-4" d="m509.17,238.33c1.65,0,3,1.35,3,3v41c0,1.65-1.35,3-3,3h-26c-1.65,0-3-1.35-3-3v-41c0-1.65,1.35-3,3-3h26m0-1h-26c-2.2,0-4,1.8-4,4v41c0,2.2,1.8,4,4,4h26c2.2,0,4-1.8,4-4v-41c0-2.2-1.8-4-4-4h0Z"/><path class="cls-4" d="m472.17,238.33c1.65,0,3,1.35,3,3v41c0,1.65-1.35,3-3,3h-26c-1.65,0-3-1.35-3-3v-41c0-1.65,1.35-3,3-3h26m0-1h-26c-2.2,0-4,1.8-4,4v41c0,2.2,1.8,4,4,4h26c2.2,0,4-1.8,4-4v-41c0-2.2-1.8-4-4-4h0Z"/><path class="cls-4" d="m435.17,238.33c1.65,0,3,1.35,3,3v41c0,1.65-1.35,3-3,3h-26c-1.65,0-3-1.35-3-3v-41c0-1.65,1.35-3,3-3h26m0-1h-26c-2.2,0-4,1.8-4,4v41c0,2.2,1.8,4,4,4h26c2.2,0,4-1.8,4-4v-41c0-2.2-1.8-4-4-4h0Z"/><path class="cls-4" d="m398.17,238.33c1.65,0,3,1.35,3,3v41c0,1.65-1.35,3-3,3h-26c-1.65,0-3-1.35-3-3v-41c0-1.65,1.35-3,3-3h26m0-1h-26c-2.2,0-4,1.8-4,4v41c0,2.2,1.8,4,4,4h26c2.2,0,4-1.8,4-4v-41c0-2.2-1.8-4-4-4h0Z"/><path class="cls-4" d="m362.17,238.33c1.65,0,3,1.35,3,3v41c0,1.65-1.35,3-3,3h-26c-1.65,0-3-1.35-3-3v-41c0-1.65,1.35-3,3-3h26m0-1h-26c-2.2,0-4,1.8-4,4v41c0,2.2,1.8,4,4,4h26c2.2,0,4-1.8,4-4v-41c0-2.2-1.8-4-4-4h0Z"/></g><path class="cls-3" d="m724.91,261.83c0,78.15-64.23,141.5-143.48,141.5h-317.52c-79.24,0-143.48-63.35-143.48-141.5s64.23-141.5,143.48-141.5h317.52c79.24,0,143.48,63.35,143.48,141.5Z"/><path class="cls-2" d="m729.17,261.83c0,80.36-65.14,145.5-145.5,145.5h-322c-80.36,0-145.5-65.14-145.5-145.5s65.14-145.5,145.5-145.5h322c80.36,0,145.5,65.14,145.5,145.5Z"/></svg>
    <div class="absolute inset-0 flex justify-center items-center mb-8 mr-2">
        @php
            $numSeats = 8;
            $radius = 45; // Adjust this value to control the radius of the circular arrangement
            $centerX = 46; // Center X coordinate in percentage units
            $centerY = 45; // Center Y coordinate in percentage units

            $loggedInUserId = auth()->id(); // Get the logged-in user's ID
            $isUserInGame = App\Models\Game::where('user_id', $loggedInUserId)->exists();

            // Fetch the registered users in the game
            $registeredUsers = App\Models\Game::with('user')->get()->pluck('user');

            for ($i = 0; $i < $numSeats; $i++) {
                $angle = deg2rad(360 / $numSeats * $i);

                // Adjust Y position for the 1st and 5th "12" elements
                $y = $centerY + $radius * sin($angle);
                if ($i == 2) {
                    $y -= 6; // Adjust Y position for the 1st element
                }  elseif ($i == 6) {
                    $y -= -6; // Adjust Y position for the 5th element
                }
                // Adjust X position for the 2nd and 6th elements
                $x = $centerX + $radius * cos($angle);
                if ($i == 3) {
                    $x -= 2; // Adjust X position for the 2nd element
                    $y -= -2; // Adjust X position for the 2nd element
                } elseif ($i == 5) {
                    $x += -2; // Adjust X position for the 6th element
                } elseif ($i == 1) {
                    $x += 2; // Adjust X position for the 6th element
                } elseif ($i == 7) {
                    $x += 2; // Adjust X position for the 6th element
                }
        @endphp
        <div class="seat-image" style="position: absolute; top: {{ $y }}%; left: {{ $x }}%; width: 100px; height: 100px;">
            <img src="{{ asset('images/sitz.png') }}" alt="Image" style="width: 100%; height: 100%;">
            @php
                // Check if there's a registered user for this seat
                $userForSeat = $registeredUsers[$i] ?? null;
            @endphp
            @if ($userForSeat)
                <h2 class="seat-text text-white font-bold" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
                    {{ $userForSeat->name }}
                </h2>
            @else
                <h2 class="seat-text text-red-500 font-bold uppercase" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">Empty</h2>
            @endif
        </div>
        @php
            }
        @endphp
    </div>
    @if($isUserInGame)
        <!-- Display a button for users who are already in the game -->
        <div class="absolute inset-0 flex justify-center items-center" style="top: 28%;">
            <form action="{{ route('game.leave') }}" method="POST">
                @csrf
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Leave Table</button>
            </form>
            @if(Auth::user()->hasRole('admin'))
                <!-- Display an additional button for admins -->
                <form action="{{ route('game.reset') }}" method="POST" id="deleteAllForm">
                    @csrf
                    <button type="submit" onclick="return confirmDelete()" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">RESET</button>
                </form>
            @endif
        </div>
    @else
        <!-- Display a button for users who are not in the game -->
        <div class="absolute inset-0 flex justify-center items-center" style="top: 28%;">
            @php
                $gameCount = \App\Models\Game::count();
                $isGameFull = $gameCount >= 8;
            @endphp

            <form action="{{ route('game.add') }}" method="POST">
                @csrf
                @if ($isGameFull)
                    <button type="submit" disabled class="text-white bg-gray-300 cursor-not-allowed hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-400 dark:hover:bg-gray-400 focus:outline-none dark:focus:ring-gray-500">Join Game (Full)</button>
                @else
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Join Game</button>
                @endif
            </form>
            @if(Auth::user()->hasRole('admin'))
                <!-- Display an additional button for admins -->
                <form action="{{ route('game.reset') }}" method="POST" id="deleteAllForm">
                    @csrf
                    <button type="submit" onclick="return confirmDelete()" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">RESET</button>
                </form>
            @endif
        </div>
    @endif
</div>

<script>
    function confirmDelete() {
        return confirm('Bist du sicher dass du das Game resetten willst?');
    }
</script>
