<li
    v-bind:class="{'current-page': path.indexOf('/services') !== -1}">
    <a
        href="#"
        {{--v-link="{path: '/services/chiropractic'}"--}}
        v-on:click="path = '/services/chiropractic'"
    >
        Services
    </a>
</li>