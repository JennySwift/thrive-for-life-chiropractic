<!doctype html>

<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <title>Thrive For Life</title>
    @include('templates.head-links')
</head>

<body>

<div id=@yield('id', 'nothing') class="main">

    <navbar
        :path.sync="path"
    >
    </navbar>

    @section('page-content')
    @show

</div>

@include('templates/footer')