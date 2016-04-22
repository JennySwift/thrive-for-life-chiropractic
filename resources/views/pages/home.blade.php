@extends('layouts.master')

@section('page-content')

    {{--<home-page--}}
        {{--v-show="path === '/'"--}}
        {{--transition="fade"--}}
        {{--class="animated"--}}
    {{-->--}}
    {{--</home-page>--}}

    {{--<welcome-page--}}
        {{--:path="path"--}}
    {{-->--}}
    {{--</welcome-page>--}}

    {{--<about-page--}}
        {{--:path.sync="path"--}}
    {{-->--}}
    {{--</about-page>--}}

    {{--<contact-page--}}
        {{--v-if="path === '/contact'"--}}
        {{--transition="fade"--}}
        {{--class="animated"--}}
    {{-->--}}
    {{--</contact-page>--}}

    {{--Services--}}
    {{--<ak-page--}}
        {{--v-show="path === '/services/ak'"--}}
        {{--:path.sync="path"--}}
        {{--transition="fade"--}}
        {{--class="animated"--}}
    {{-->--}}
    {{--</ak-page>--}}

    {{--<chiropractic-page--}}
        {{--v-show="path === '/services/chiropractic'"--}}
        {{--:path.sync="path"--}}
        {{--transition="fade"--}}
        {{--class="animated"--}}
    {{-->--}}
    {{--</chiropractic-page>--}}

    {{--<government-page--}}
        {{--v-if="path === '/services/government'"--}}
        {{--:path.sync="path"--}}
    {{-->--}}
    {{--</government-page>--}}

    {{--<hra-page--}}
        {{--v-show="path === '/services/hra'"--}}
        {{--:path.sync="path"--}}
        {{--transition="fade"--}}
        {{--class="animated"--}}
    {{-->--}}
    {{--</hra-page>--}}

    {{--<lifestyle-page--}}
        {{--v-show="path === '/services/lifestyle'"--}}
        {{--:path.sync="path"--}}
        {{--transition="fade"--}}
        {{--class="animated"--}}
    {{-->--}}
    {{--</lifestyle-page>--}}

    {{--<rnr-page--}}
        {{--v-show="path === '/services/rnr'"--}}
        {{--:path.sync="path"--}}
        {{--transition="fade"--}}
        {{--class="animated"--}}
    {{-->--}}
    {{--</rnr-page>--}}

    <privacy-policy></privacy-policy>

    <router-view
            keep-alive
            :path.sync="path"
    >
    </router-view>

@stop