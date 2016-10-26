<footer class="main-footer">
    <address class="main-footer__info">
        <ul>
            <li>
                <i class="fa fa-phone"></i><span class="divider">/</span><i class="fa fa-fax"></i>
                <a href="tel:+3646561400">+36 46 561-400</a>
            </li>
            <li>
                <i class="fa fa-envelope"></i>
                <script type="text/javascript">
                    <!--
                        var ukqaxnw = ['r', 'l', 'a', '=', 'i', 'a', 's', 'h', 'e', 'l', 'a', 'g', '"', 'c', '.', 'e', 'c', 'g', 'f', 'o', '/', 's', 'a', 'i', ' ', '@', 'm', '"', 'o', 'l', 'm', '.', 'm', 'h', 'm', ':', '@', 's', 'l', '>', 'i', 'a', 'h', 'e', 'i', 'a', 'k', 'o', 'i', '<', ' ', '"', 'e', 'c', 'a', '"', 'i', 'm', 'm', 'k', 't', '=', 's', 'm', 'a', '>', 'a', 'l', '<', 'm'];
                        var mhzotzs = [4, 46, 22, 7, 50, 44, 51, 21, 53, 36, 1, 57, 41, 35, 62, 42, 30, 24, 6, 14, 67, 39, 55, 60, 34, 56, 49, 8, 64, 12, 32, 29, 9, 3, 25, 15, 23, 38, 61, 69, 27, 10, 54, 20, 45, 26, 52, 31, 11, 66, 2, 33, 5, 63, 37, 47, 17, 43, 65, 19, 13, 40, 18, 16, 59, 48, 68, 28, 0, 58];
                        var pkvyqum = new Array();
                        for (var i = 0; i < mhzotzs.length; i++) {
                            pkvyqum[mhzotzs[i]] = ukqaxnw[i];
                        }
                        for (var i = 0; i < pkvyqum.length; i++) {
                            document.write(pkvyqum[i]);
                        }
                    // -->
                </script>
            </li>
            <li>
                <i class="fa fa-home"></i>
                <span>3529 Miskolc, Csabai kapu 9-11.</span>
            </li>
        </ul>
    </address>
    <nav class="main-footer__menu">
        <ul>
            @include('_frontend.menu', array('items' => $mainMenu->roots()))
        </ul>
    </nav>
    <h1 class="main-footer__logo">
        {{Setting::get('site-title')}}
    </h1>
    <div class="main-footer__credits">
        <a href="http://divide.hu">
            Divide.hu
        </a>
    </div>
</footer>