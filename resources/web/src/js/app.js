(function ($) {

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

})(jQuery);