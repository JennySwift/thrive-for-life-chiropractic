<!doctype html>

<html lang="en" class="" ng-app="thriveForLife">

<head>
    <meta charset="UTF-8">
    <title>Thrive For Life</title>
    @include('templates.head-links')
</head>

{{--@include('templates.page-loading')--}}

<body ng-controller="BaseController">

{{--@include('templates.loading')--}}

<div ng-controller=@yield('controller') id=@yield('id', 'nothing') class="main">

    @include('templates.header')

    @section('page-content')
    @show

</div>

@include('templates/footer')