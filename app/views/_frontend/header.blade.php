<nav class="main-nav">
    <div class="container-flex">
        <h1 class="main-nav__logo">
            <a href="/">
                <div class="main-nav__logo__cross">
                    <svg>
                        <use xlink:href="#cross"></use>
                    </svg>
                </div>
                <div class="main-nav__logo__title">
                    {{Setting::get('site-title')}}
                </div>
            </a>
        </h1>
        <ul class="main-nav__navbar">
            <li><a href="#">Menü</a></li>
            <li><a href="#">Menü</a>
                <ul>
                    <li><a href="#">Almenü</a></li>
                    <li><a href="#">Almenü</a></li>
                    <li class="active"><a href="#">Almenü</a></li>
                    <li><a href="#">Almenü</a></li>
                    <li><a href="#">Almenü</a></li>
                    <li><a href="#">Almenü</a></li>
                    <li><a href="#">Almenü</a></li>
                    <li><a href="#">Almenü</a></li>
                </ul>
            </li>
            <li class="active"><a href="#">Menü</a></li>
            <li><a href="#">Menü</a></li>
            <li><a href="#">Menü</a>
            </li>
            <li><a href="#">Menü</a></li>
            <li><a href="#">Menü</a>
            </li>
            <li class="active"><a href="#">Menü</a></li>
        </ul>
    <!--ul>
            @include('_frontend.menu', array('items' => $mainMenu->roots()))
            </ul-->
    </div>
</nav>
<div class="main-header__background"></div>
<header class="main-header">
    <div class="container-flex">
        <section class="main-header__content">
            <h1>Dicsőség Jézus Krisztusnak!</h1>
            <p>
                Üdvözöljük a Sajószentpéteri Görög Katolikus Egyházközség megújult weboldalán.
                Kellemes időtöltést kívánunk.
            </p>
            <a class="btn btn--default" href="#hirek">Körülnézek</a>
        </section>
    </div>
    <span class="main-header__arrow animated bounce"></span>
</header>



