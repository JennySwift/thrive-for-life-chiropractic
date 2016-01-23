<li v-bind:class="{'current-page': window.location.pathname.indexOf('/services') !== -1}" id="menu-dropdown" class="dropdown">
    <a href="#" data-toggle="dropdown">
        Services
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
        <li><a v-link="{path: '/services/chiropractic'}" href="#">Chiropractic</a></li>
        <li><a v-link="{path: '/services/ak'}" href="#">AK</a></li>
        <li><a v-link="{path: '/services/rnr'}" href="#">RNR</a></li>
        <li><a v-link="{path: '/services/lifestyle'}" href="#">lifestyle</a></li>
        <li><a v-link="{path: '/services/hra'}" href="#">HRA</a></li>
        <li><a v-link="{path: '/services/government'}" href="#">Government</a></li>
    </ul>
</li>