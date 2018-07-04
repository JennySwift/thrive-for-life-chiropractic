<template>
    <ul
        v-show="shared.showServicesTabs"
        v-bind:class="{'contact-page-services-dropdown-menu': shared.path === '/contact'}"
        id="services-dropdown-menu"
        class=""
        role="menu"
    >

        <li
            v-bind:class="{'current-tab': shared.path === '/services/chiropractic', 'next-to-current-tab': shared.path === '/services/ak'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/chiropractic" v-on:click="setPath('/services/chiropractic')">Chiropractic</router-link>
            </div>
        </li>

        <li
            v-bind:class="{'current-tab': shared.path === '/services/ak', 'next-to-current-tab': shared.path === '/services/rnr'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/ak" v-on:click="setPath('/services/ak')">Applied Kinesiology</router-link>
            </div>
        </li>

        <li
            v-bind:class="{'current-tab': shared.path === '/services/rnr', 'next-to-current-tab': shared.path === '/services/lifestyle'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/rnr" v-on:click="setPath('/services/rnr')">Retained Neonatal Reflexes</router-link>
            </div>
        </li>

        <li
            v-bind:class="{'current-tab': shared.path === '/services/lifestyle', 'next-to-current-tab': shared.path === '/services/hra'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/lifestyle" v-on:click="setPath('/services/lifestyle')">Lifestyle Coaching</router-link>
            </div>
        </li>


        <li
            v-bind:class="{'current-tab': shared.path === '/services/hra', 'next-to-current-tab': shared.path === '/services/government'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/hra" v-on:click="setPath('/services/hra')">Health Risk Assessment</router-link>
            </div>
        </li>

        <li v-bind:class="{'current-tab': shared.path === '/services/government'}" class="tab">
            <div class="tab-inner">
                <router-link to="/services/government" v-on:click="setPath('/services/government')">Government-Supported</router-link>
            </div>
        </li>
    </ul>

</template>

<script>
    import store from '../../repositories/Store'
    export default {
        data: function () {
            return {
                shared: store.state
            };
        },
        components: {},
        methods: {

            /**
             *
             * @param path
             */
            setPath: function (path) {
                store.set('path', shared.path);
                store.set('showServicesTabs', false);
            }
        },
        mounted: function () {

        }
    }
</script>

<style lang="scss" type="text/scss">

</style>