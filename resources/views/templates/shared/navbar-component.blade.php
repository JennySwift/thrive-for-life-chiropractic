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
                <a v-link="{path: '/'}" href="#">Home</a>
            </li>

            @include('templates.header.services')

            <li
                v-bind:class="{'current-page': window.location.pathname === '/about'}"
            >
                <a v-link="{path: '/about'}" href="#">About</a>
            </li>

            <li v-bind:class="{'current-page': window.location.pathname === '/contact'}">
                <a v-link="{path: '/contact'}" href="#">Contact</a>
            </li>

            @include('templates/header/user')

        @endif

    </ul>

</script>