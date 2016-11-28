<footer class="main-footer">
    <div class="container-flex">
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