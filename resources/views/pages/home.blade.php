@extends('layouts.master')

@section('page-content')
    <privacy-policy></privacy-policy>

    <router-view
            :path.sync="path"
            {{--class="scrollbar-container"--}}
    >
    </router-view>

@stop