@extends('layouts.master')

@section('page-content')

    <home-page
        v-show="path === '/'"
        {{--transition="fade"--}}
    >
    </home-page>

    <about-page
        v-if="path === '/about'"
        :path.sync="path"
        {{--transition="fade"--}}
    >
    </about-page>

    <contact-page
        v-if="path === '/contact'"
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
        v-if="path === '/services/government'"
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

    <privacy-policy></privacy-policy>

    {{--<router-view></router-view>--}}

@stop