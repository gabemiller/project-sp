<footer class="main-footer">
    <div class="container-flex">
        <nav class="main-footer__menu">
            <ul>
                @include('_frontend.menu', array('items' => $mainMenu->roots()))
            </ul>
        </nav>
        <section class="main-footer__copyright">
            <p>
                2016 &copy; {{Setting::get('site-title')}}
            </p>
            <a href="http://divide.hu">
                Divide.hu
                <svg>
                    <use xlink:href="#divide_logo"></use>
                </svg>
            </a>
        </section>
    </div>
</footer>