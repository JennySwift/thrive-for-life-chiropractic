<script id="services-dropdown-menu-template" type="x-template">

    <ul v-show="showServicesTabs" id="services-dropdown-menu" class="" role="menu">

        <li
                v-bind:class="{'current-tab': path === '/services/chiropractic', 'next-to-current-tab': path === '/services/ak'}"
                class="tab"
        >
            <div class="tab-inner">
                <a
                        {{--v-link="{path: '/services/chiropractic'}"--}}
                        v-on:click="goToPage('/services/chiropractic')"
                        href="#"
                >
                    Chiropractic
                </a>
            </div>
        </li>

        <li
                v-bind:class="{'current-tab': path === '/services/ak', 'next-to-current-tab': path === '/services/rnr'}"
                class="tab"
        >
            <div class="tab-inner">
                <a
                        {{--v-link="{path: '/services/ak'}"--}}
                        v-on:click="goToPage('/services/ak')"
                        href="#"
                >
                    Applied Kinesiology
                </a>
            </div>
        </li>

        <li
                v-bind:class="{'current-tab': path === '/services/rnr', 'next-to-current-tab': path === '/services/lifestyle'}"
                class="tab"
        >
            <div class="tab-inner">
                <a
                        {{--v-link="{path: '/services/rnr'}"--}}
                        v-on:click="goToPage('/services/rnr')"
                        href="#"
                >
                    Retained Neonatal Reflexes
                </a>
            </div>
        </li>

        <li
                v-bind:class="{'current-tab': path === '/services/lifestyle', 'next-to-current-tab': path === '/services/hra'}"
                class="tab"
        >
            <div class="tab-inner">
                <a
                        {{--v-link="{path: '/services/lifestyle'}"--}}
                        v-on:click="goToPage('/services/lifestyle')"
                        href="#"
                >
                    Lifestyle Coaching
                </a>
            </div>
        </li>


        <li
                v-bind:class="{'current-tab': path === '/services/hra', 'next-to-current-tab': path === '/services/government'}"
                class="tab"
        >
            <div class="tab-inner">
                <a
                        {{--v-link="{path: '/services/hra'}"--}}
                        v-on:click="goToPage('/services/hra')"
                        href="#"
                >
                    Health Risk Assessment
                </a>
            </div>
        </li>

        <li v-bind:class="{'current-tab': path === '/services/government'}" class="tab">
            <div class="tab-inner">
                <a
                        {{--v-link="{path: '/services/government'}"--}}
                        v-on:click="goToPage('/services/government')"
                        href="#"
                >
                    Government-Supported
                </a>
            </div>
        </li>
    </ul>

</script>