//JS for navbar toggle whwn screen size is small
$('.nav a').on('click', function() {
    $('.btn-navbar').click();
    $('.navbar-toggle').click();
    $('.navbar-toggler').click();
});

//Carousel
$('.carousel').carousel({
    interval: 2000
})