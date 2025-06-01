
$(document).ready(function () {
    $('.dummy').each(function () {
        var content = $(this);
        var fullText = content.html();
        var wordCount = fullText.split(' ').length;

        if (wordCount > 108) { // Number of words threshold
            content.addClass('shortened').data('full-text', fullText);

            // Creating the Read More button
            var readMoreBtn = $('<button>More <i class="fa fa-angle-down" aria-hidden="true"></i></button>').css({
                'display': 'block',
                'margin': 'auto',
                'marginBottom': '30px',
                'cursor': 'pointer',
                'border': 'none',
                'fontSize': '17px',
                'background': 'none',
                'textAlign': 'center',
                'color': 'rgb(234, 79, 35)'
            });;
            content.after(readMoreBtn);

            readMoreBtn.click(function () {
                if (content.hasClass('shortened')) {
                    content.html(content.data('full-text'));
                    $(this).html('Less <i class="fa fa-angle-up" aria-hidden="true"></i>');
                    content.removeClass('shortened');
                } else {
                    content.html(content.data('full-text').split(' ').slice(0, 108).join(' '));
                    $(this).html('More <i class="fa fa-angle-down" aria-hidden="true"></i></button>');
                    content.addClass('shortened');
                }
            });

            // Initially shorten the content
            content.html(fullText.split(' ').slice(0, 108).join(' '));
        }
    })
})