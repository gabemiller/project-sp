<nav class="main-nav">
    <div class="container-flex">
        <h1 class="main-nav__logo">
            <a href="/">
                <div class="main-nav__logo__cross">
                    <svg>
                        <use xlink:href="#greek_cross"></use>
                    </svg>
                </div>
                <div class="main-nav__logo__title">
                    {{Setting::get('site-title')}}
                </div>
            </a>
        </h1>
        <button class="mobile-nav__button">
            <span>Menü</span>
            <svg>
                <use xlink:href="#menu"></use>
            </svg>
        </button>
        <ul class="mobile-nav__navbar">
            @include('_frontend.menu', array('items' => $mainMenu->roots()))
        </ul>
    </div>
</nav>
<div class="main-header__background"></div>
<header class="main-header">
    @yield('header')
</header>



