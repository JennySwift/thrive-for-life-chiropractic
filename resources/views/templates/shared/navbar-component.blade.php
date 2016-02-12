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

            <li v-bind:class="{'current-page': path === '/'}">
                <a
                    {{--v-link="{path: '/'}"--}}
                    v-on:click="goToPage('/')"
                    href="#"
                >
                    Home
                </a>
            </li>

            @include('templates.header.services')

            <li
                v-bind:class="{'current-page': path === '/about'}"
            >
                <a
                    {{--v-link="{path: '/about'}"--}}
                    v-on:click="goToPage('/about')"
                    href="#"
                >
                    About
                </a>
            </li>

            <li v-bind:class="{'current-page': path === '/contact'}">
                <a
                    {{--v-link="{path: '/contact'}"--}}
                    v-on:click="goToPage('/contact')"
                    href="#"
                >
                    Contact
                </a>
            </li>

            @include('templates/header/user')

        @endif

    </ul>

</script>