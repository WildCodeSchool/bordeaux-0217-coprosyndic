$(".flash-box").first().hide().fadeIn(400).delay(2500).fadeOut(300, function () {
    $(this).remove();
});