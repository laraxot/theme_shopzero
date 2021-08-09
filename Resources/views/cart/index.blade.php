@include('pub_theme::layouts.global.head')

<body style="background-color: #f8f9fa;">
    <div style="background-color: #f8f9fa;padding: 11px;">
        @include('pub_theme::layouts.global.topbar')
        @include('pub_theme::layouts.cart_page.title')
        <div style="margin-bottom: 150px;">
            @include('pub_theme::layouts.cart_page.master_element')
            @include('pub_theme::layouts.cart_page.additional_element')
            @include('pub_theme::livewire.cartProduct')
        </div>
    </div>
</body>
