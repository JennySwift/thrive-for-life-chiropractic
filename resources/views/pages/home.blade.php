@extends('layouts.master')

@section('page-content')

    <div id="home">
        {{--<div class="cover"></div>--}}
        {{--<img class="text" src="/img/Home/Layer 2.svg">--}}
        <a href="#welcome">
            <i class="fa fa-chevron-circle-down"></i>
        </a>
        {{--<div class="text">--}}
            {{--<div class="thrive-for-life">thrive for life</div>--}}
            {{--<div class="chiropractic">chiropractic</div>--}}
        {{--</div>--}}
    </div>

    <div id="welcome">
        <a href="#home">
            <i class="fa fa-chevron-circle-up"></i>
        </a>
        <img class="background-img" src="/img/Home/spring.jpg">
        <div class="flex">
            <div class="text">
                <h2>Welcome!</h2>
                <p>I'm Dr Peter Swift, chiropractor and owner of <i>Thrive for Life Chiropractic.</i></p>
                <p>I’m here to help you love life - to naturally support your body's own efforts to heal, be strong, feel great, and conquer the challenges each day brings.</p>
                <p>If you want to get well and stay well - not just survive, but thrive - I'm here for you.</p>
            </div>
            <div class="img-container">
                <img src="/img/Welcome/welcome.png">
            </div>
        </div>
    </div>

@stop