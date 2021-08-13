
@php

$categoryModel=$_panel->getParent()->getParent()->getParent()->row;

$categoryGuid=$categoryModel->guid;
$categoryTitle=$categoryModel->title;

$productModel=$_panel->getParent()->getParent()->row;

$product=['title'=>$productModel->title,'firstPrice'=>$productModel->prices()->first()->price];


@endphp

@include('pub_theme::layouts.global.head')

{{-- dddx(get_defined_vars()) --}}

<body style="background-color: #f8f9fa;">
    <div class="w-100" style="background-color: #f8f9fa;padding: 11px;">
        @include('pub_theme::layouts.global.topbar')
        @include('pub_theme::layouts.product_page.product_page_title',['categoryGuid'=>$categoryGuid])
        <div style="padding-bottom: 10px;">
            {{-- @include('pub_theme::layouts.product_page.expand') --}}
            {{-- @livewire('fastorder::test')--}}
            @include('pub_theme::addition.additions')
        </div>
    </div>
    @include('pub_theme::layouts.product_page.add_cart',['product'=>$product])
    @include('pub_theme::layouts.global.foot')
    
   
@livewireStyles
@livewireScripts

</body>