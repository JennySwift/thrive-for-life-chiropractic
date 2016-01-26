<script id="home-page-template" type="x-template">

    <div id="home-page-container">
        <div id="home">
            <a href="#welcome">
                {{--<i class="fa fa-chevron-circle-down"></i>--}}
                <div class="arrow">
                    <span>V</span>
                </div>
            </a>
        </div>

        <div id="welcome">
            <div class="cover"></div>
            <a href="#home">
                {{--<i class="fa fa-chevron-circle-up"></i>--}}
                <div class="arrow">
                    <span>V</span>
                </div>
            </a>
            {{--<img class="background-img" src="/img/Home/spring-small-compressed.jpg">--}}
            <div class="flex">
                <div class="scrollbar-container">
                    <div class="text scrollbar-content">
                        <h1>Welcome!</h1>
                        <p>I'm Dr Peter Swift, chiropractor and owner of <i>Thrive for Life Chiropractic.</i></p>
                        <p>I’m here to help you love life - to naturally support your body's own efforts to heal, be strong, feel great, and conquer the challenges each day brings.</p>
                        <p>If you want to get well and stay well - not just survive, but thrive - I'm here for you.</p>
                    </div>
                </div>

                <div class="img-container">
                    <img src="/img/Welcome/welcome-img.jpg">
                </div>
            </div>
        </div>

        {{--This is so that Firefox doesn't load an image when the user switches page--}}
        <div id="preloaded-images">
            <img src="/img/About/about-quality5.jpg">
            <img src="/img/Chiropractic/balance-compressed.jpg">
            <img src="/img/AK/walk-small-compressed.jpg">
            <img src="/img/RNR/child-small-compressed.jpg">
            <img src="/img/Lifestyle/hiker-small-compressed.jpg">
            <img src="/img/HRA/tape-small.jpg">
            <img src="/img/Government/meadow-small-compressed.jpg">
        </div>
    </div>

</script>