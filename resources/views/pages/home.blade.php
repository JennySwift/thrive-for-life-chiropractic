@extends('layouts.master')

@section('page-content')
    <privacy-policy></privacy-policy>

    <router-view
            {{--class="scrollbar-container"--}}
    >
    </router-view>

@stop