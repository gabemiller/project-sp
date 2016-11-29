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
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>{{Setting::get('site-title')}} @if(!empty($title)) {{'- '.$title }} @endif</title>

    {{ HTML::style('css/app.min.css') }}

</head>
<body class="{{$bodyClass}}">

    <div style="display: none;visibility: hidden; width: 0;height: 0;position: absolute;z-index: -2">
        <!DOCTYPE PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol id="cross" viewBox="0 0 463.406 463.406">
            <polygon points="378.936,116.465 262.471,116.465 262.471,0 200.935,0 200.935,116.465 84.47,116.465 84.47,178.002
                200.935,178.002 200.935,463.406 262.471,463.406 262.471,178.002 378.936,178.002 "/>
            </symbol>
            <symbol id="greek_cross" viewBox="0 0 162.01 282">
                <path d="M72,3H96V42h39V65H96V99h69v23H96V285H72V122H3V99H72l0-34H33V42H72V3Z"/>
            </symbol>
            <symbol id="divide_logo" viewBox="0 0 340.51 342.49">
                <path d="M97.6,22.78A170,170,0,0,1,209.86,6.15q0,142.15,0,284.31a121.32,121.32,0,0,0,33-217.79q0-28.23,0-56.44a171.21,171.21,0,0,1-99,326q0-142.28,0-284.55a121.34,121.34,0,0,0-33,217.33q0,28.52,0,57A171.69,171.69,0,0,1,97.6,22.78Z"/>
            </symbol>
            <symbol viewBox="0 0 56 56" id="menu">
                <path d="M28,0C12.561,0,0,12.561,0,28s12.561,28,28,28s28-12.561,28-28S43.439,0,28,0z M40,41H16c-1.104,0-2-0.896-2-2s0.896-2,2-2
	h24c1.104,0,2,0.896,2,2S41.104,41,40,41z M40,30H16c-1.104,0-2-0.896-2-2s0.896-2,2-2h24c1.104,0,2,0.896,2,2S41.104,30,40,30z
	 M40,19H16c-1.104,0-2-0.896-2-2s0.896-2,2-2h24c1.104,0,2,0.896,2,2S41.104,19,40,19z"/>
            </symbol>
            <symbol viewBox="0 0 129 129" id="arrow-down">
                <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z"/>
            </symbol>
        </svg>
    </div>

    @include('_frontend.header')

    <main id="tartalom" class="main-content">
        @yield('content')
    </main>

    @include('_frontend.footer')

    {{ HTML::script('scripts/vendor.min.js'); }}
    {{ HTML::script('scripts/app.min.js'); }}

</body>
</html>
