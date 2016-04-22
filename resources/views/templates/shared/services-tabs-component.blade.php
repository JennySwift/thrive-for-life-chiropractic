<script id="services-tabs-template" type="x-template">

    <ul
        v-show="showServicesTabs"
        v-bind:class="{'contact-page-services-tabs': path === '/contact'}"
        id="services-tabs"
        class="tabs"
        >

        <li
                v-bind:class="{'current-tab': path === '/services/chiropractic', 'next-to-current-tab': path === '/services/ak'}"
                class="tab"
        >
            <div class="tab-inner">
                <a
                        v-link="{path: '/services/chiropractic'}"
                        {{--v-on:click="path = '/services/chiropractic'"--}}
                        {{--href="#"--}}
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
                        v-link="{path: '/services/ak'}"
                        {{--v-on:click="path = '/services/ak'"--}}
                        {{--href="#"--}}
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
                        v-link="{path: '/services/rnr'}"
                        {{--v-on:click="path = '/services/rnr'"--}}
                        {{--href="#"--}}
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
                        v-link="{path: '/services/lifestyle'}"
                        {{--v-on:click="path = '/services/lifestyle'"--}}
                        {{--href="#"--}}
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
                        v-link="{path: '/services/hra'}"
                        {{--v-on:click="path = '/services/hra'"--}}
                        {{--href="#"--}}
                >
                    Health Risk Assessment
                </a>
            </div>
        </li>

        <li v-bind:class="{'current-tab': path === '/services/government'}" class="tab">
            <div class="tab-inner">
                <a
                        v-link="{path: '/services/government'}"
                        {{--v-on:click="path = '/services/government'"--}}
                        {{--href="#"--}}
                >
                    Government-Supported
                </a>
            </div>
        </li>

    </ul>

</script>