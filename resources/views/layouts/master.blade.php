<html lang="en" class="">

@include('templates.head');

<body>

<div id="app">
    <div class="main">

        <navbar></navbar>

        <services-tabs></services-tabs>

        @section('page-content')
        @show

    </div>

    <footer-component></footer-component>

    {{--This is so that Firefox doesn't load an image when the user switches page--}}
    <div id="preloaded-images">
        <img src="/img/About/about-quality5.jpg">
        <img src="/img/Welcome/welcome-img.jpg">
        <img src="/img/Chiropractic/balance-compressed.jpg">
        <img src="/img/AK/walk-small-compressed.jpg">
        <img src="/img/RNR/child-small-compressed.jpg">
        <img src="/img/Lifestyle/hiker-small-compressed.jpg">
        <img src="/img/HRA/tape-small.jpg">
        <img src="/img/Government/meadow-small-compressed.jpg">
    </div>

</div>

@include('templates.scripts')

</body>
</html>