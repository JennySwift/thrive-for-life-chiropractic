

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
            <a href="/" class="fa fa-home"></a>
        </li>

        <li>
            <a href="/meet-pete">Meet Pete</a>
        </li>

        @include('templates/header/services')

        <li>
            <a href="/fees">Fees</a>
        </li>

        <li>
            <a href="/contact">Contact</a>
        </li>

        @include('templates/header/user')

    @endif

</ul>