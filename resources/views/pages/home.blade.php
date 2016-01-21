@extends('layouts.master')

@section('page-content')

    <div id="home">
        @include('templates.logo')
    </div>

    <div id="welcome">
        <img class="background-img" src="/img/Home/spring.jpg">
        <div class="flex">
            <div class="text">
                <h2>Welcome!</h2>
                <p>I'm Dr Peter Swift, chiropractor and owner of <i>Thrive for Life Chiropractic.</i></p>
                <p>I’m here to help you love life - to naturally support your body's own efforts to heal, be strong, feel great, and conquer the challenges each day brings.</p>
                <p>Text missing here in Pages.</p>
            </div>
            <div class="img-container">
                <img src="/img/Welcome/welcome.png">
            </div>
        </div>
    </div>

    <div id="chiropractic"></div>
    <div id="ak"></div>
    <div id="rnr"></div>
    <div id="lifestyle"></div>
    <div id="hra"></div>
    <div id="government"></div>
    <div id="about"></div>
    <div id="contact"></div>

@stop