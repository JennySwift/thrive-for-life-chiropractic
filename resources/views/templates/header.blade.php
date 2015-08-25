

<ul id="navbar" style="z-index:1000">

    <li>
        <img src="img/logo.png"/>
    </li>

    <?php
        include(base_path() . '/resources/views/templates/header/user.blade.php');
    ?>

{{--    @include('templates/header/user')--}}

    <li id="menu-dropdown" class="dropdown">
        <a href="#" class="dropdown-toggle fa fa-bars" data-toggle="dropdown"><span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="/auth/logout">Logout <?php echo Auth::user()->name; ?></a>
            </li>

            <li>
                <a href="#" ng-click="show.credits = true">Credits</a>
            </li>
        </ul>

    </li>

    <li id="menu-dropdown" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            actions
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">

        </ul>
    </li>

    <li>
        <a href="#" ng-click="changeTab('home')" class="fa fa-home"></a>
    </li>

    <li>
        <a href="#" ng-click="changeTab('about')">About</a>
    </li>

    <li>
        <a href="#" ng-click="changeTab('FAQ')">FAQ</a>
    </li>

    <li>
        <a href="#" ng-click="changeTab('contact')">Contact</a>
    </li>

    <li>
        <a href="#" ng-click="changeTab('resources')">Resources</a>
    </li>

    <li>
        <a href="#" ng-click="changeTab('patient portal')">Patient Portal</a>
    </li>

</ul>