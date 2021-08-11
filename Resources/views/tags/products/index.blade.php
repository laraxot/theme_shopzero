{{-- productinverse index blade  --}}
@php
    //dddx(get_defined_vars());
@endphp
@include('pub_theme::layouts.global.head')

<body style="background-color: #f8f9fa">
    <div class="w-100" style="padding: 11px;">
        @include('pub_theme::layouts.global.topbar')
        <div style="background-color: #f8f9fa;">
            @include('pub_theme::layouts.category_page.tag_title')
            @include('pub_theme::layouts.category_page.products')
            @include('pub_theme::layouts.global.cart')
        </div>
    </div>
    <script src="{{ Theme::asset('pub_theme::resources/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    @include('pub_theme::layouts.global.head')
</body>

</html>
