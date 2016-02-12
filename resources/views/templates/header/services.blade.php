<li class="services">
    <a
        href="javascript:void(0)"
        v-bind:class="{'current-page': path.indexOf('/services') !== -1}"
        {{--v-link="{path: '/services/chiropractic'}"--}}
        v-on:click="toggleServicesTabs()"
    >
        Services
    </a>

    <a
        href="#"
        {{--v-link="{path: '/services/chiropractic'}"--}}
        v-on:click="toggleServicesTabs()"
    >
        <span v-show="showServicesTabs" class="fa fa-chevron-up"></span>
        <span v-show="!showServicesTabs" class="fa fa-chevron-down"></span>
    </a>
    
</li>