<ul class="tabs">
    <li class="tab">
        <a
            {{--v-link="{path: '/services/chiropractic'}"--}}
            v-on:click="path = '/services/chiropractic'"
            href="#"
            v-bind:class="{'current-page': path === '/services/chiropractic'}"
        >
            Chiropractic
        </a>
    </li>
    <li class="tab">
        <a
            {{--v-link="{path: '/services/ak'}"--}}
            v-on:click="path = '/services/ak'"
            href="#"
            v-bind:class="{'current-page': path === '/services/ak'}"
        >
            Applied Kinesiology
        </a>
    </li>
    <li class="tab">
        <a
            {{--v-link="{path: '/services/rnr'}"--}}
            v-on:click="path = '/services/rnr'"
            href="#"
            v-bind:class="{'current-page': path === '/services/rnr'}"
        >
            Retained Neonatal Reflexes
        </a>
    </li>
    <li class="tab">
        <a
            {{--v-link="{path: '/services/lifestyle'}"--}}
            v-on:click="path = '/services/lifestyle'"
            href="#"
            v-bind:class="{'current-page': path === '/services/lifestyle'}"
        >
            Lifestyle</a></li>
    <li class="tab">
        <a
            {{--v-link="{path: '/services/hra'}"--}}
            v-on:click="path = '/services/hra'"
            href="#"
            v-bind:class="{'current-page': path === '/services/hra'}"
        >
            Health Risk Assessment
        </a>
    </li>
    <li class="tab">
        <a
            {{--v-link="{path: '/services/government'}"--}}
            v-on:click="path = '/services/government'"
            href="#"
            v-bind:class="{'current-page': path === '/services/government'}"
        >
            Government
        </a>
    </li>
</ul>