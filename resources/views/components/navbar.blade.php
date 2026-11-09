@props(['username'])

<nav class="navbar">

    <div class="logo">
        RACOFFE
    </div>

    <div class="nav-menu">
        <a href="{{ route('dashboard', ['username' => $username]) }}">
            Dashboard
        </a>

        <a href="{{ route('pengelolaan', ['username' =>$username]) }}">
            Menu 
        </a>

        <a href="{{ route('profile', ['username' =>$username]) }}">
            Profile 
        </a>

        <a href="{{ route('login') }}">
            Logout 
        </a>

    </div>

</nav>