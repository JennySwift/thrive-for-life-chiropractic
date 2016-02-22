<li
    v-bind:class="{'current-page': path.indexOf('/services') !== -1}"
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
    >
        <span v-show="showServicesTabs" class="fa fa-chevron-up"></span>
        <span v-show="!showServicesTabs" class="fa fa-chevron-down"></span>
    </a>

    <services-dropdown-menu
            :path.sync="path"
            :show-services-tabs.sync="showServicesTabs"
    >
    </services-dropdown-menu>
    
</li>