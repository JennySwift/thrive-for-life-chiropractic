

<ul id="navbar" style="z-index:1000">

    @if (Auth::guest())
        <li>
            <a href="/auth/login">Login</a>
        </li>
        <li>
            <a href="/auth/register">Register</a>
        </li>

    @else

        <li>
            <a href="/">Home</a>
        </li>

        @include('templates.header.services')

        <li>
            <a href="/about">About</a>
        </li>

        <li>
            <a href="/contact">Contact</a>
        </li>

        @include('templates/header/user')

    @endif

</ul>