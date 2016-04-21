<!doctype html>

<html lang="en" class="">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Quality chiropractic care tailored to your needs. Whether your goal is to relieve specific symptoms or to improve your overall health and long-term quality of life, I'm here to help.">
    <title>Thrive for Life Chiropractic | Natural Health Care | Hurstville, Sydney | Dr Peter Swift (Chiropractor)</title>
    @include('templates.head-links')
</head>

<body>

<div id=@yield('id', 'nothing') class="main">

    <navbar
        :path.sync="path"
        :show-services-tabs.sync="showServicesTabs"
    >
    </navbar>

    <services-tabs
        :path.sync="path"
        :show-services-tabs.sync="showServicesTabs"
    >
    </services-tabs>

    @section('page-content')
    @show

</div>

<footer-component></footer-component>


@include('templates.scripts')

</body>
</html>