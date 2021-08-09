@include('pub_theme::layouts.global.head')

@include('pub_theme::layouts.global.topbar')

<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        @include('pub_theme::layouts.information_page.map')
        <div>
            @include('pub_theme::layouts.information_page.address')
            @include('pub_theme::layouts.information_page.phone')
            @include('pub_theme::layouts.information_page.times')
        </div>
    </div>
    @include('pub_theme::layouts.global.cart')
    @include('pub_theme::layouts.global.head')
</body>
