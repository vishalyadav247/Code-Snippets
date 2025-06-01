// Function to check if an element is in the viewport
function isElementInView(element) {
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
}

// Flag to ensure animation only runs once per element
var animated = false;

$(window).scroll(function() {
    // Check if any .count element is in view and if the animation hasn't run yet
    if (isElementInView($('.count')) && !animated) {
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        // Set the flag to true to prevent animation from running again
        animated = true;
    }
});
