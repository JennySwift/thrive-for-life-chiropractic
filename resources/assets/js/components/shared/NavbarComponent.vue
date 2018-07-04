<template>
    <ul
        v-bind:class="{'contact-page-nav': shared.path === '/contact'}"
        id="navbar"
        style="z-index:1000"
    >

        <li v-bind:class="{'current-page': shared.path === '/'}">
            <router-link to="/" v-on:click="setPath('/')">Home</router-link>
        </li>

        <li v-bind:class="{'current-page': shared.path === '/welcome'}">
            <router-link to="/welcome" v-on:click="setPath('/welcome')">Welcome</router-link>
        </li>

        <!--Services-->
        <li
            v-bind:class="{'current-page': shared.path.indexOf('/services') !== -1}"
            class="services"
        >
            <a
                href="javascript:void(0)"
                v-on:click="toggleServicesTabs()"
            >
                Services
            </a>

            <a
                href="#"
                v-on:click="toggleServicesTabs()"
                class="arrow-container"
            >
                <span v-show="shared.showServicesTabs" class="fa fa-chevron-up"></span>
                <span v-show="!shared.showServicesTabs" class="fa fa-chevron-down"></span>
            </a>

            <services-dropdown-menu></services-dropdown-menu>

        </li>
        <!--End Services-->

        <li
            v-bind:class="{'current-page': shared.path === '/about'}"
        >
            <router-link to="/about" v-on:click="hideServicesTabs()">About</router-link>
        </li>

        <li v-bind:class="{'current-page': shared.path === '/contact'}">
            <router-link to="/contact" v-on:click="hideServicesTabs()">Contact</router-link>
        </li>

        <li v-bind:class="{'current-page': shared.path === '/survey'}">
            <a href="/survey" v-on:click="hideServicesTabs()">Survey</a>
        </li>

    </ul>
</template>

<script>
    import store from '../../repositories/Store'
    import ServicesDropdownMenuComponent from './ServicesDropdownMenuComponent.vue'
    export default {
        data: function () {
            return {
                shared: store.state
            };
        },
        components: {
            'services-dropdown-menu': ServicesDropdownMenuComponent
        },
        methods: {

            /**
             *
             * @param path
             */
            setPath: function (path) {
                store.set('path', path);
                store.set('showServicesTabs', false);

//                if (this.shared.path.indexOf('services') == -1) {
//                    this.showServicesTabs = false
//                }
            },

            /**
             *
             */
            toggleServicesTabs: function () {
                store.toggle('showServicesTabs');
            }
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>