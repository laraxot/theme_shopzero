<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        @include('pub_theme::layouts.global.topbar')
        <h1 style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;margin-bottom: 20px;"><i class="icon ion-ios-arrow-back" style="margin-right: 10px;font-family: Montserrat, sans-serif;"></i>Ordini frequenti</h1>
        @include('pub_theme::layouts.profile_page.orders_pages.frequent_orders_pages.orders')
        @include('pub_theme::layouts.global.cart')
    </div>
</body>