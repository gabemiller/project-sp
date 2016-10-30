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
<body class="{{$bodyClass or 'layout-maintenance'}}">
<div style="display: none;visibility: hidden; width: 0;height: 0;position: absolute;z-index: -2">
    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
    <svg version="1.1" id="cross" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 463.406 463.406" style="enable-background:new 0 0 463.406 463.406;" xml:space="preserve">
        <polygon points="378.936,116.465 262.471,116.465 262.471,0 200.935,0 200.935,116.465 84.47,116.465 84.47,178.002
            200.935,178.002 200.935,463.406 262.471,463.406 262.471,178.002 378.936,178.002 "/>
    </svg>
</div>
<div class="maintenance-box">
    <div class="maintenance-box__background" style="background-image: url('images/templom-koszonto.jpg');"></div>
    <section class="maintenance-box__text">
        <div class="maintenance-box__text__cross animated fadeInDown delay-2">
            <svg>
                <use xlink:href="#cross"></use>
            </svg>
        </div>
        <p class="animated fadeInUp delay-7">Dicsőség Jézus Krisztusnak!</p>
        <p class="animated fadeInUp delay-10">Az oldalunk jelenleg karbantartás alatt áll.<br>
            Kérjük, látogasson vissza később!</p>
    </section>
</div>

</body>
</html>