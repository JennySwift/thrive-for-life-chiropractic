<script id="navbar-template" type="x-template">

    <ul id="navbar" style="z-index:1000">

        @if (Auth::guest())
            <li>
                <a href="/auth/login">Login</a>
            </li>
            <li>
                <a href="/auth/register">Register</a>
            </li>

        @else

            <li v-bind:class="{'current-page': window.location.pathname === '/'}">
                <a href="/">Home</a>
            </li>

            @include('templates.header.services')

            <li v-bind:class="{'current-page': window.location.pathname === '/about'}">
                <a href="/about">About</a>
            </li>

            <li v-bind:class="{'current-page': window.location.pathname === '/contact'}">
                <a href="/contact">Contact</a>
            </li>

            @include('templates/header/user')

        @endif

    </ul>

</script>