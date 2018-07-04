<html lang="en" class="">

@include('templates.head')

<body>

<div id="app">
    <ul
            class="navbar"
            style="z-index:1000"
    >

        <li>
            <a href="/">Home</a>
        </li>
    </ul>
    
    <div class="main">

        <privacy-policy></privacy-policy>

        <h1>Survey</h1>

        {{--<router-view--}}
        {{--class="scrollbar-container"--}}
        {{-->--}}
        {{--</router-view>--}}

    </div>

    <footer-component></footer-component>

</div>

@include('templates.scripts')

</body>
</html>