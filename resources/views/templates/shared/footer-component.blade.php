<script id="footer-template" type="x-template">

    <footer v-bind:class="{'contact-page-footer': path === '/contact'}">
        <li>
            <a href="#" v-on:click="showPrivacyPolicyPopup()">Privacy Policy</a>
        </li>
    </footer>

</script>

