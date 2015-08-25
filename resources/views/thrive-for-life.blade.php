<!doctype html>
<html lang="en" class="" ng-app="thriveForLife">
<head>

    <meta charset="UTF-8" name="viewport" content="initial-scale = 1">
    <title>Thrive For Life</title>

    <link rel="stylesheet" href="tools/bootstrap.min.css">
    <link rel="stylesheet" href="tools/tooltipster.css">  
    <link rel="stylesheet" href="tools/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="" ng-controller="BaseController">

@include('templates.header')

<!-- ==============================.container============================== -->    
<div class="container">

    @include('pages/index')
      
</div> <!-- .container -->  

@include('templates.footer')
