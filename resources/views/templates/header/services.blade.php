<li
    v-bind:class="{'current-page': path.indexOf('/services') !== -1}">
    <a
        href="#"
        {{--v-link="{path: '/services/chiropractic'}"--}}
        v-on:click="toggleServicesTabs()"
    >
        Services
        <span v-show="showServicesTabs" class="fa fa-chevron-up"></span>
        <span v-show="!showServicesTabs" class="fa fa-chevron-down"></span>
    </a>
    
</li>