<script id="footer-template" type="x-template">

    <footer v-bind:class="{'contact-page-footer': path === '/contact'}">
        <li>
            <div class="copyright"><i class="fa fa-copyright"></i> <span>2016 Thrive for Life Chiropractic</span></div>
        </li>

        <li>
            <a href="#" v-on:click="showPrivacyPolicyPopup()">Privacy Policy</a>
        </li>
    </footer>

</script>

