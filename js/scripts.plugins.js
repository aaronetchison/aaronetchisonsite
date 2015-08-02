/* Lightbox */
$(function()
{
   $('a.lightbox').lightBox();
});

/* Carousel */
$(function()
{
    $('.owl-carousel').owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        autoPlay : 9999,
        stopOnHover : true,
    });
});