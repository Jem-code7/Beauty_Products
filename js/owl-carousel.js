$(document).ready(function() {

    // Hero Banner
    $(".banner-area .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        dots: false,
        mouseDrag: false
    });
    
    $(".brands-area .owl-carousel").owlCarousel({
        dots: true,
        items: 10,
        autoplay: true,
        rewind: true
    });

});