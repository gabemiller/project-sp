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
        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1" id="cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 463.406 463.406" style="enable-background:new 0 0 463.406 463.406;" xml:space="preserve">
            <polygon points="378.936,116.465 262.471,116.465 262.471,0 200.935,0 200.935,116.465 84.47,116.465 84.47,178.002
                200.935,178.002 200.935,463.406 262.471,463.406 262.471,178.002 378.936,178.002 "/>
        </svg>
        <svg version="1.1" id="divide_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="354.242px" height="349.615px" viewBox="0 0 354.242 349.615" enable-background="new 0 0 354.242 349.615"
             xml:space="preserve">
            <g>
                <path fill="#fff" d="M97.6,22.785c34.03-18.26,74.4-24.1,112.26-16.64c0.03,94.77-0.01,189.54,0.02,284.31
                c31.57-8.88,58.9-31.38,73.89-60.52c16.36-31.18,18.02-69.56,4.54-102.08c-9.14-22.41-25.21-41.9-45.43-55.19
                c-0.02-18.82-0.02-37.63,0-56.44c31.6,13.3,58.93,36.4,77.39,65.29c18.93,29.33,28.41,64.57,26.96,99.44
                c-1.18,33.41-12.48,66.37-32.04,93.48c-18.94,26.44-45.57,47.33-75.85,59.25c-30.12,11.95-63.71,14.87-95.47,8.53
                c-0.01-94.85,0.01-189.7-0.01-284.55c-29.35,8.41-55.04,28.56-70.38,54.93c-14.69,24.85-19.87,55.04-14.62,83.4
                c5.68,31.95,24.97,61.1,52.01,79c0,19.01,0.01,38.03-0.01,57.04c-29.64-12.59-55.52-33.81-73.75-60.36
                c-16.67-24.12-26.96-52.6-29.53-81.82c-2.88-31.44,3.01-63.66,17.1-91.93C40.379,66.105,66.25,39.415,97.6,22.785z"/>
            </g>
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
