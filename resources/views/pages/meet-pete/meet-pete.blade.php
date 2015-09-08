@extends('layouts.master')

@section('controller', 'BaseController')

@section('page-content')


    <div ng-controller='MeetPeteController' id="meet-pete">

        <div>
            <p>Your health is arguably your most valuable asset, so it's nice to know who's looking after it (got your back), right? Take a moment to get to know me, and if you have any further questions or would like to make an appointment please feel free to
                <a href="/contact">contact me</a>.</p>
        </div>


        <div><img src="img/pete.JPG" alt=""/></div>

        @include('templates.meet-pete.tabs')

        @include('templates.meet-pete.what-do-you-love-about-being-a-chiropractor')

        @include('templates.meet-pete.what-are-your-qualifications')
        @include('templates.meet-pete.principles-values-beliefs')
        @include('templates.meet-pete.when-not-treating-patients')




    </div>

@stop