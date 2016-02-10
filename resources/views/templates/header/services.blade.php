<li
    v-bind:class="{'current-page': path.indexOf('/services') !== -1}">
    <a
        href="#"
        {{--v-link="{path: '/services/chiropractic'}"--}}
        v-on:click="toggleServicesTabs()"
    >
        Services
    </a>
</li>