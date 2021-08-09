@include('pub_theme::layouts.global.head')

<body style="background-color: #f8f9fa;">
    <div class="w-100" style="background-color: #f8f9fa;padding: 11px;">
        @include('pub_theme::layouts.global.topbar')
        @include('pub_theme::layouts.product_page.product_page_title')
        <div style="padding-bottom: 10px;">
            {{-- @include('pub_theme::layouts.product_page.expand') --}}
            {{-- @livewire('fastorder::test')--}}
            @include('pub_theme::addition.additions')
        </div>
    </div>
    @include('pub_theme::layouts.product_page.add_cart')
    @include('pub_theme::layouts.global.foot')
    
   
@livewireStyles
@livewireScripts

</body>
