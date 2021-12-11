$(document).ready(function() {

    // Hero Banner
    $(".banner-area .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        dots: false,
        mouseDrag: false
    });
    
    $('.brands-area .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:7
            },
            1000:{
                items:8
            }
        }
    });

});