<li v-bind:class="{'current-page': path.indexOf('/services') !== -1}" id="menu-dropdown" class="dropdown">
    <a href="#" data-toggle="dropdown">
        Services
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
        <li>
            <a
                {{--v-link="{path: '/services/chiropractic'}"--}}
                v-on:click="path = '/services/chiropractic'"
                href="#"
            >
                Chiropractic
            </a>
        </li>

        <li>
            <a
                {{--v-link="{path: '/services/ak'}"--}}
                v-on:click="path = '/services/ak'"
                href="#"
            >
                AK
            </a>
        </li>
        <li>
            <a
                {{--v-link="{path: '/services/rnr'}"--}}
                v-on:click="path = '/services/rnr'"
                href="#"
            >
                RNR
            </a>
        </li>
        <li>
            <a
                {{--v-link="{path: '/services/lifestyle'}"--}}
                v-on:click="path = '/services/lifestyle'"
                href="#"
            >
                lifestyle
            </a>
        </li>
        <li>
            <a
                {{--v-link="{path: '/services/hra'}"--}}
                v-on:click="path = '/services/hra'"
                href="#"
            >
                HRA
            </a>
        </li>
        <li>
            <a
                {{--v-link="{path: '/services/government'}"--}}
                v-on:click="path = '/services/government'"
                href="#"
            >
                Government
            </a>
        </li>
    </ul>
</li>