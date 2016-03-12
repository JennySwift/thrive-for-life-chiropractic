<!doctype html>

<html lang="en" class="">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thrive For Life</title>
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

@include('templates/footer')