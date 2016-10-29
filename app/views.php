<?php


View::composer(['index','site.article.index','site.article.show'], function ($view) {
    View::share('bodyClass', 'layout-article');
});

View::composer(['site.document.index','site.document.show'], function ($view) {
    View::share('bodyClass', 'layout-document');
});

View::composer(['site.error.index','site.error.show'], function ($view) {
    View::share('bodyClass', 'layout-article');
});

View::composer(['site.event.index','site.event.show'], function ($view) {
    View::share('bodyClass', 'layout-article');
});

View::composer(['site.gallery.index','site.gallery.show'], function ($view) {
    View::share('bodyClass', 'layout-article');
});

View::composer(['maintenance'], function ($view) {
    View::share('bodyClass', 'layout-maintenance');
});
