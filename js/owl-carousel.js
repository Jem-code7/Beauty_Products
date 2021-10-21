$(document).ready(function() {

    // Hero Banner
    $(".banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true
    });

    $(".brands-area .owl-carousel").owlCarousel({
        dots: false,
        items: 4,
        nav: true
    });
});