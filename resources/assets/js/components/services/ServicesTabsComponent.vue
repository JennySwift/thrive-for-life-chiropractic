<template>
    <ul
        v-show="shared.showServicesTabs"
        v-bind:class="{'contact-page-services-tabs': path === '/contact'}"
        id="services-tabs"
        class="tabs"
    >

        <li
            v-bind:class="{'current-tab': path === '/services/chiropractic', 'next-to-current-tab': path === '/services/ak'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/chiropractic" v-on:click="setPath('/services/chiropractic')">Chiropractic</router-link>
            </div>
        </li>

        <li
            v-bind:class="{'current-tab': path === '/services/ak', 'next-to-current-tab': path === '/services/rnr'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/ak" v-on:click="setPath('/services/ak')">Applied Kinesiology</router-link>
            </div>
        </li>

        <li
            v-bind:class="{'current-tab': path === '/services/rnr', 'next-to-current-tab': path === '/services/lifestyle'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/rnr" v-on:click="setPath('/services/rnr')">Retained Neonatal Reflexes</router-link>
            </div>
        </li>

        <li
            v-bind:class="{'current-tab': path === '/services/lifestyle', 'next-to-current-tab': path === '/services/hra'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/lifestyle" v-on:click="setPath('/services/lifestyle')">Lifestyle Coaching</router-link>
            </div>
        </li>


        <li
            v-bind:class="{'current-tab': path === '/services/hra', 'next-to-current-tab': path === '/services/government'}"
            class="tab"
        >
            <div class="tab-inner">
                <router-link to="/services/hra" v-on:click="setPath('/services/hra')">Health Risk Assessment</router-link>
            </div>
        </li>

        <li v-bind:class="{'current-tab': path === '/services/government'}" class="tab">
            <div class="tab-inner">
                <router-link to="/services/government" v-on:click="setPath('/services/government')">Government-Supported</router-link>
            </div>
        </li>

    </ul>

</template>

<script>
    import helpers from '../../repositories/Helpers'
    import store from '../../repositories/Store'
    export default {
        data: function () {
            return {
                shared: store.state
            };
        },
        components: {},
        computed: {
            'path': function () {
                return this.$route.path;
            }
        },
        methods: {
            setPath: function (path) {
                store.set('path', path);
            }
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>
