<footer class="main-footer">
    <div class="container-flex">
        <div class="main-footer__call">
            <div class="card card--with-hover">
                <p class="main-footer__call-display">Szent Péter Közhasznú Alapítvány</p>
                <p>OTB Bank <strong>11734200-20013891</strong></p>
                <p>Adószám <strong>18440834-1-05</strong></p>
            </div>
        </div>
        <div class="main-footer__call">
            <div class="card card--with-hover">
                <p><strong>Céljaink</strong> gyerekek, ifjúság, családok támogatása,
                vezetése az Egyház útján. Karitatív tevékenységek, Közösségi
                programok, Családsziget létrehozása.</p>
                <p class="main-footer__call-display">Köszönjük adója 1%-át!</p>
            </div>
        </div>
        <div class="col-flex-md-6">
            <nav class="main-footer__menu">
                <ul>
                    @include('_frontend.menu', array('items' => $mainMenu->roots()))
                </ul>
            </nav>
        <section class="main-footer__copyright">
            <p>
                2016 &copy; {{Setting::get('site-title')}}
            </p>
        </section>
        </div>
        <div class="col-flex-md-6">
        <section class="main-footer__credits">
            <a class="credits-divide" href="http://divide.hu" target="_blank">
                <span class="sr-only">Divide.hu</span>
                <svg>
                    <use xlink:href="#divide_logo"></use>
                </svg>
            </a>
        </section>
        </div>
    </div>
</footer>