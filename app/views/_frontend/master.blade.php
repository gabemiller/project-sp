<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicon/manifest.json">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#d5805b">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="{{Setting::get('site-title')}}">
    <meta name="application-name" content="{{Setting::get('site-title')}}">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <title>{{Setting::get('site-title')}} @if(!empty($title)) {{'- '.$title }} @endif</title>

    {{ HTML::style('css/app.min.css') }}

</head>
<body class="{{$bodyClass or 'layout-default'}}">

    <div style="display: none;visibility: hidden; width: 0;height: 0;position: absolute;z-index: -2">
        <!DOCTYPE PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol id="cross" viewBox="0 0 463.406 463.406">
            <polygon points="378.936,116.465 262.471,116.465 262.471,0 200.935,0 200.935,116.465 84.47,116.465 84.47,178.002
                200.935,178.002 200.935,463.406 262.471,463.406 262.471,178.002 378.936,178.002 "/>
            </symbol>
            <symbol id="divide_logo" viewBox="0 0 340.51 342.49">
                <path d="M97.6,22.78A170,170,0,0,1,209.86,6.15q0,142.15,0,284.31a121.32,121.32,0,0,0,33-217.79q0-28.23,0-56.44a171.21,171.21,0,0,1-99,326q0-142.28,0-284.55a121.34,121.34,0,0,0-33,217.33q0,28.52,0,57A171.69,171.69,0,0,1,97.6,22.78Z"/>
            </symbol>
        </svg>
    </div>

    @include('_frontend.header')

    <main class="main-content">
        @yield('content')
        <div class="hidden">
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
