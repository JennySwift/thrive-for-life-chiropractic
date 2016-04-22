<script id="welcome-page-template" type="x-template">

    <div
        id="welcome-page"
        v-show="showContent"
        transition="fade"
        class="animated"
    >
        <div class="cover"></div>
        <div class="flex">
            <div class="scrollbar-container">
                <div class="text scrollbar-content">
                    <h1 class="big-screens">Welcome!</h1>
                    <div class="small-screens">
                        <h1>Welcome!</h1>
                        <img src="/img/Welcome/welcome-img.jpg">
                    </div>
                    <p>I'm Dr Peter Swift, chiropractor and owner of <i>Thrive for Life Chiropractic.</i></p>
                    <p>I’m here to help you thrive — to naturally support your body's own efforts to heal, be strong, feel great, and conquer the challenges each day brings.</p>
                    <p>If you want to get well and stay well — not just survive, but thrive — I'm here for you.</p>
                </div>
            </div>

            <div class="img-container">
                <img src="/img/Welcome/welcome-img.jpg">
            </div>
        </div>
    </div>

</script>