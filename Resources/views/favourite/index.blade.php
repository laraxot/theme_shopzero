@include('pub_theme::layouts.global.head')

<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;padding-top: 11px;padding-bottom: 11px;">
        @include('pub_theme::layouts.global.topbar')
        <h1
            style="margin-top: 80px;padding-left: 0px;font-family: Montserrat, sans-serif;color: rgb(33,37,41);font-weight: bold;margin-bottom: 20px;">
            Preferiti</h1>
        @include('pub_theme::layouts.favourite_page.product')
        @include('pub_theme::layouts.global.cart')
    </div>
    @include('pub_theme::layouts.global.head')
</body>
