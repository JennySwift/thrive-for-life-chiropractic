<html lang="en" class="">

@include('templates.head')

<body>

<div id="survey-app">
    <f7-statusbar></f7-statusbar>

    {{--<ul--}}
            {{--class="navbar"--}}
            {{--style="z-index:1000"--}}
    {{-->--}}

        {{--<li>--}}
            {{--<a href="/">Home</a>--}}
        {{--</li>--}}
    {{--</ul>--}}

    <f7-view id="main-view" main>
        <survey-page></survey-page>
    </f7-view>


</div>

<script type="text/javascript" src="{{ elixir("js/survey.js") }}"></script>

</body>
</html>