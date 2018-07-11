@if (Route::has('login'))
    <nav class="navbar navbar-light bg-light">

        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/tasks') }}">Tasks board</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth

    </nav>
@endif