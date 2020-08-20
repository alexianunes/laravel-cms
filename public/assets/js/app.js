$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('.btn-back-to-top').fadeIn('slow');
    } else {
        $('.btn-back-to-top').fadeOut('slow');
    }
});

$(".scroll-suave").on("click", function (e) {
    e.preventDefault();
    var o = $(this).attr("href"),
        a = $(o).offset().top;
    $("html, body").animate({ scrollTop: a - 100 }, 500);
})