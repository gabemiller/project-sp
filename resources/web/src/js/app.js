import $ from 'jquery';
import lightbox from 'lightbox2';

/**
 *
 */
let scrollToById = (id) => {
    $('html,body').animate({
        scrollTop: $(id).offset().top - 30
    },1000);
};

$('a[href*="#"]:not([href="#"])').click((e)=>{
    e.preventDefault();
    scrollToById(e.currentTarget.hash);
});

/**
 * Mobile navigation
 */

let $mobileNav = $('.mobile-nav__button');
let $mobileNavBar = $('.mobile-nav__navbar');

$mobileNav.click((e) => {
    e.preventDefault();
    const $this= $(e.currentTarget);
    $this.toggleClass('active');
    $mobileNavBar.toggleClass('active');
});

$mobileNavBar.find('li').each((index, element)=>{
    $(element).has('ul').find('a').first().click((e)=> {
        e.preventDefault();
        const $this= $(e.currentTarget);
        $this.closest('li')
                .first()
                .toggleClass('active');
    });
    $(element).has('ul').find('a').first().dblclick((e)=> {
        const $this= $(e.currentTarget);
        if($this.prop('href').indexOf('#') == -1){
            window.location = $this.prop('href');
        }else{
            window.location = $this.next('ul').find('li').first().find('a').first().prop('href');
        }
    });
});

/**
 * Table wrapper
 */

let $table = $('table');

$table.wrap("<div class='table-responsive'></div>");

/**
 * Owl carousel
 */
$('.owl-carousel').owlCarousel({
	margin:10,
	responsiveClass:true,
	nav: false,
	dots: true,
	responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

/**
 * Lightbox
 */

lightbox.option({
	showImageNumberLabel: false
});
