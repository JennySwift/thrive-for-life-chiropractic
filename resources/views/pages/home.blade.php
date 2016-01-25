@extends('layouts.master')

@section('page-content')

    <home-page
        v-show="path === '/'"
        {{--transition="fade"--}}
    >
    </home-page>

    <about-page
        v-show="path === '/about'"
        {{--transition="fade"--}}
    >
    </about-page>

    <contact-page
        v-show="path === '/contact'"
        {{--transition="fade"--}}
    >
    </contact-page>

    {{--Services--}}
    <ak-page
        v-show="path === '/services/ak'"
        :path.sync="path"
        {{--transition="fade"--}}
    >
    </ak-page>
    <chiropractic-page
        v-show="path === '/services/chiropractic'"
        :path.sync="path"
        {{--transition="fade"--}}
    >
    </chiropractic-page>
    <government-page
        v-show="path === '/services/government'"
        :path.sync="path"
        {{--transition="fade"--}}
    >
    </government-page>
    <hra-page
        v-show="path === '/services/hra'"
        :path.sync="path"
        {{--transition="fade"--}}
    >
    </hra-page>
    <lifestyle-page
        v-show="path === '/services/lifestyle'"
        :path.sync="path"
        {{--transition="fade"--}}
    >
    </lifestyle-page>
    <rnr-page
        v-show="path === '/services/rnr'"
        :path.sync="path"
        {{--transition="fade"--}}
    >
    </rnr-page>

    {{--<router-view></router-view>--}}

@stop