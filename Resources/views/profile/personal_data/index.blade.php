<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;">
        @include('pub_theme::layouts.global.topbar')
        <h1 style="margin-top: 100px;font-family: Montserrat, sans-serif;padding-left: 0px;font-weight: bold;"><i
                class="icon ion-ios-arrow-back" style="margin-right: 10px;"></i>Dati Anagrafici</h1>
        @include('pub_theme::layouts.profile_page.personal_data.profile_photo')
        @include('pub_theme::layouts.profile_page.personal_data.form')
        @include('pub_theme::layouts.profile_page.personal_data.buttons')
        @include('pub_theme::layouts.global.cart')
    </div>
</body>
