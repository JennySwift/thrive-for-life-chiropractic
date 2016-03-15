<script id="home-page-template" type="x-template">

    <div id="home-page-container">
        <div id="home">
            <div class="text">
                <img src="/img/Home/thrive-for-life-text.png">
            </div>
            <a href="#welcome">
                <span class="arrow fa fa-chevron-circle-down"></span>
            </a>
        </div>

        @include('pages.welcome-page')

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