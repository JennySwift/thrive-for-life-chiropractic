<!doctype html>

<html lang="en" class="" ng-app="budgetApp">

<head>
    <meta charset="UTF-8">
    <title>Thrive For Life</title>
    {{--<link rel="stylesheet" href="../tools/bootstrap.min.css">--}}
    {{--Bootstrap is the only one I need from plugins.css--}}
    <link rel="stylesheet" href="../css/plugins.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        #navbar {display: flex;}
        body footer {display: flex;}
        body .main {display: block;}
    </style>
</head>

<body>
    <navbar></navbar>
    <div class="main">
        @section('content')
        @show
    </div>

    @include('templates.shared.footer-component')

</body>

