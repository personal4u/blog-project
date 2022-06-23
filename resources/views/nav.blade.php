@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @php
            if(auth()->user())
            {
                echo 'Welcome '.auth()->user()->name.' - ';
            }
        @endphp
        <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> | 
        @auth            
            <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> |
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif