<?php


View::composer(['index'], function ($view) {
    View::share('bodyClass', 'layout-home');
});

View::composer(['site.document.index','site.document.show'], function ($view) {
    View::share('bodyClass', 'layout-document');
});

/*View::composer(['site.error.403','site.error.404','site.error.500','site.error.default'], function ($view) {
    View::share('bodyClass', 'layout-error');
});*/

View::composer(['site.event.index','site.event.show','site.article.show','site.page.show','site.news.index'], function ($view) {
    View::share('bodyClass', 'layout-default');
});

View::composer(['site.gallery.index','site.gallery.show'], function ($view) {
    View::share('bodyClass', 'layout-gallery');
});

View::composer(['maintenance'], function ($view) {
    View::share('bodyClass', 'layout-maintenance');
});
