@extends('layouts.master')

@section('page-content')

    <home-page v-show="path === '/'"></home-page>
    <about-page v-show="path === '/about'"></about-page>
    <contact-page v-show="path === '/contact'"></contact-page>

    {{--Services--}}
    <ak-page
        v-show="path === '/services/ak'"
        :path.sync="path"
    >
    </ak-page>
    <chiropractic-page
        v-show="path === '/services/chiropractic'"
        :path.sync="path"
    >
    </chiropractic-page>
    <government-page
        v-show="path === '/services/government'"
        :path.sync="path"
    >
    </government-page>
    <hra-page
        v-show="path === '/services/hra'"
        :path.sync="path"
    >
    </hra-page>
    <lifestyle-page
        v-show="path === '/services/lifestyle'"
        :path.sync="path"
    >
    </lifestyle-page>
    <rnr-page
        v-show="path === '/services/rnr'"
        :path.sync="path"
    >
    </rnr-page>

    {{--<router-view></router-view>--}}

@stop