$(document).ready(function() {

    // Hero Banner
    $(".banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true
    });

    $(".brands-area .owl-carousel").owlCarousel({
        dots: true,
        items: 10,
        nav: true
    });

    $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
});