<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="./favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="./favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="./favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="./favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="./favicon/manifest.json">
    <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="{{Setting::get('site-title')}}">
    <meta name="application-name" content="{{Setting::get('site-title')}}">
    <meta name="msapplication-TileColor" content="#009fe3">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>{{Setting::get('site-title')}} @if(!empty($title)) {{'- '.$title }} @endif</title>

    {{ HTML::style('css/app.min.css') }}

</head>
<body class="{{$bodyClass or 'layout-default'}}">

    @include('_frontend.header')

    <main class="main container">
        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4 visible-md visible-lg">
                <section class="card card--image card--erzsebet">
                </section>
                <section class="card">
                    <h2 class="card__subtitle">Számlaszám</h2>
                    <p class="card__content">11734004-20394369</p>
                    <h2 class="card__subtitle">Adószám</h2>
                    <p class="card__content">18414020-1-05</p>
                </section>
                <section class="card card--blue">
                    <h2 class="card__title card__title--onepercent">Kérjük ajánlja fel személyi jövedelmadójának 1%-át </h2>
                </section>
                <section class="card card--image card--molino">
                </section>
                @yield('sidebar')
            </div>
        </div>
    </main>

    @include('_frontend.footer')

    {{ HTML::script('scripts/vendor.min.js'); }}
    {{ HTML::script('scripts/app.min.js'); }}

</body>
</html>
