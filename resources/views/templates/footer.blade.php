
{{--@include('templates/real-footer')--}}

@include('pages.home-page-component')
@include('pages.about-page-component')
@include('pages.contact-page-component')

{{--Services pages--}}
@include('pages.services.chiropractic-page-component')
@include('pages.services.ak-page-component')
@include('pages.services.rnr-page-component')
@include('pages.services.lifestyle-page-component')
@include('pages.services.hra-page-component')
@include('pages.services.government-page-component')

{{--Shared--}}
@include('templates.shared.navbar-component')
@include('templates.shared.services-dropdown-menu-component')
@include('templates.shared.services-tabs-component')
@include('templates.shared.accordion-item-component')

<script type="text/javascript" src="{{ elixir("js/all.js") }}"></script>

</body>
</html>