$(document).ready(function () {
    /*document.querySelectorAll('.header__menu-item:last-child').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });*/

    $(".header__menu-item[href='#footer']").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#footer").offset().top
	    }, 1500);
	});

    $( ".section1__titles a" ).click(function(e) {
        e.preventDefault();
        $(".section1__titles a").removeClass('active');
        $(".section1__titles2 a").removeClass('active');
        $(".section1__logos-inner-wrapper").removeClass('active');
        $(this).addClass('active');
        $(".section1__logos-inner-wrapper[data-title='" + $(this).attr('data-title') + "']").addClass('active');
    });

    $( ".section1__titles2 a" ).click(function(e) {
        e.preventDefault();
        $(".section1__titles a").removeClass('active');
        $(".section1__titles2 a").removeClass('active');
        $(".section1__logos-inner-wrapper").removeClass('active');
        $(this).addClass('active');
        $(".section1__logos-inner-wrapper[data-title='" + $(this).attr('data-title') + "']").addClass('active');
    });

    $( ".section4__years a" ).click(function(e) {
        e.preventDefault();
        $(".section4__years a").removeClass('active');
        $(".section4__desc-block").removeClass('active');
        $(this).addClass('active');
        $(".section4__desc-block[data-year='" + $(this).attr('data-year') + "']").addClass('active');
        if($(this).attr('data-year') == '1996') {
            $('.section4__desc-block').css('border-radius', '0 20px 20px 20px');
        } else if($(this).attr('data-year') == '2020') {
            $('.section4__desc-block').css('border-radius', '20px 0 20px 20px');
        } else {
            $('.section4__desc-block').css('border-radius', '20px');
        }
    });

    $( ".section2_text .read-more" ).click(function(e) {
        e.preventDefault();
        if($( ".section2_text p.hidden").hasClass('visible')) {
            $( ".section2_text p.hidden").removeClass('visible');
            // $( ".section2_text .read-more" ).text('Читати більше...');
        } else {
            $( ".section2_text p.hidden").addClass('visible');
            $( ".section2_text .read-more" ).css('display', 'none');
            // $( ".section2_text .read-more" ).text('Згорнути...');
        }
    });

    $(document).ready(function () {
        var overlay = $('#overlay');
        var open_modal = $('.open-popup');
        var close = $('.popup-close, .popup-close-2, .popup-close-bg');
        var modal = $('.popup');

        open_modal.click(function (event) {
            event.preventDefault();
            var div = $(this).attr('href');
            overlay.fadeIn(400,
                function () {
                    $(div)
                        .css('display', 'block')
                        .animate({opacity: 1}, 200);
                });
        });

        close.click(function () {
            modal
                .animate({opacity: 0}, 200,
                    function () {
                        $(this).css('display', 'none');
                        overlay.fadeOut(200);
                    }
                );
        });
    });

    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

});
