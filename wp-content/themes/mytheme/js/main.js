jQuery(document).ready(function($){

    var btn = $('#scroll-up');

    // scrolldown 20px show button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 20 ) {
            $(btn).css({'display': 'block'});
        } else {
            $(btn).css({'display': 'none'});
        }
    });

    // scroll up when btn clicked
    $(btn).bind('click', function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    // on page load
    if ($(window).scrollTop() > 20 ) {
        $(btn).css({'display': 'block'});
    } else {
        $(btn).css({'display': 'none'});
    }

    $('.modal-header .btn-close').html('<i class="bi bi-x"></>');
});