/**
 * Created by Gabor Molnar on 2016. 10. 26..
 */

var gulpConfig = {
    /**
     * File paths
     */
    path : {
        scss : {
            src : './src/scss/app.scss',
            dest: '../../public/css'
        },
        googleFonts : {
            src : './src/fonts/fonts.list',
            dest: '../../public'
        },
        vendor : {
            dest: '../../public/scripts'
        },
        webpack : {
            src : './src/js/app.js',
            dest: '../../public/scripts'
        },
        image : {
            src : './src/images/*.{gif,jpg,png,svg}',
            dest: '../../public/images',
            rm  : '../../public/images/*.{gif,jpg,png,svg}'
        },
        pug : {
            src : './src/views/*.pug',
            dest: './dist'
        },
        webserver : {
            root: 'dist'
        },
        watch : {
            webpack: 'src/js/*.js',
            pug    : 'src/views/**/*.pug',
            scss   : 'src/scss/**/*.scss',
            images : 'src/images/**/*.{gif,jpg,png,svg}'
        }
    },
    /**
     * Output filenames
     */
    fileName : {
        scss : {
            prefix: '',
            basename : 'app',
            suffix: '.min'
        },
        vendor : {
            prefix: '',
            basename : 'vendor',
            suffix: '.min'
        },
        webpack : {
            prefix: '',
            basename : 'app',
            suffix: '.min'
        }
    },
    /**
     * Google fonts
     *
     * FontsDir and cssDir are relative to gulp.dest path.
     */
    googleFontsConfig : {
        fontsDir: './fonts',
        cssDir: '../resources/web/src/scss/base',
        cssFilename: '_fonts.scss'
    }
};

module.exports = gulpConfig;