@include('pub_theme::layouts.global.head')
<!--@include('pub_theme::layouts.global.loading')-->
<body style="background-color: #f8f9fa;">
    <div class="w-100" style="margin-left: 0px;width: 355px;background: rgba(255,0,0,0);padding: 11px;padding-right: 11px;">
        @include('pub_theme::layouts.global.topbar')
        @include('pub_theme::layouts.homepage.slidable')
        <h1 style="margin-top: 10px;padding-left: 0px;font-family: Montserrat, sans-serif;color: rgb(33,37,41);font-weight: bold;margin-bottom: 15px;">Categorie</h1>
        @include('pub_theme::layouts.homepage.category')
        <div class="second"></div>
        @include('pub_theme::layouts.global.cart')
    </div>
    <!--<script src="{{ Theme::asset('pub_theme::resources/assets/js/loader.js') }}"></script>-->
    <script src="{{ Theme::asset('pub_theme::resources/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ Theme::asset('pub_theme::resources/assets/bootstrap/js/function.js') }}"></script>
    @include('pub_theme::layouts.global.head')
</body>

