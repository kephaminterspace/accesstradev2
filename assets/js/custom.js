$(function () {
    $('#carousel-example-generic').carousel({
        //                interval:2000,
        //                pause: "false"
    });
});

(function ($) {

    //Function to animate slider captions 
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load 
    var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel 
    $myCarousel.carousel();

    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);

    //Pause carousel  
    $myCarousel.carousel('pause');


    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });
    

})(jQuery);



///////////////

$(function () {
    $('#carousel-example-generic').carousel({
        //                interval:2000,
        //                pause: "false"
    });
});

(function ($) {

    //Function to animate slider captions 
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load 
    var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel 
    $myCarousel.carousel();

    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);

    //Pause carousel  
    $myCarousel.carousel('pause');


    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });

})(jQuery);


////////

$(document).ready(function () {

    var owl = $("#owl-partner");

    owl.owlCarousel({

        pagination: false,
        navigation: false,
        autoPlay: 1500,
        itemsCustom: [
        [1366, 5],
        [1024, 4],
        [768, 2],
        [480, 1],
      ],
    });

    ////

    var owl = $("#owl-event");

    owl.owlCarousel({

        navigation: false,
        pagination: true,
        autoPlay: 3000,
        itemsCustom: [
        [1024, 3],
        [768, 2],
        [480, 1],
      ],
    });

    //////

    var owl = $("#partner-list");

    owl.owlCarousel({

        navigation: false,
        pagination: true,
        itemsCustom: [
        [0, 1],
        [480, 2],
        [768, 3],
        [1000, 4],
        [1200, 5]
      ],

    });


});


//////////////////////

$(document).ready(function () {
    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});




///////////////////////






/////////////
new WOW().init();
////////////