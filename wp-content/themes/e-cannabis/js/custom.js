// Required Java Script

$(document).ready(function() {
    $('.carousel1').carousel({interval: 2000});
});


// With JQuery
$("#ex16a").slider({ min: 0, max: 10, value: 0, focus: true });
$("#ex16b").slider({ min: 0, max: 10, value: [0, 10], focus: true });

// Without JQuery
var sliderA = new Slider("#ex16a", { min: 0, max: 10, value: 0, focus: true });
var sliderB = new Slider("#ex16b", { min: 0, max: 10, value: [0, 10], focus: true });



$(document).ready( function() {
    $('#myCarousel').carousel({
        interval:   4000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = $('.nav').children().length -1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id) {
                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});









$(document).ready(function() {
    //Set the carousel options
    $('#quote-carousel').carousel({
        pause: true,
        interval: 4000,
    });
});