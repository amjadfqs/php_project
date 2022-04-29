$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("#navbar").addClass("fixed-top").css("opacity", "0.97");
            $("#HDbody").css("padding-top", "6rem");
        } else {
            $("#navbar").removeClass("fixed-top").css("opacity", "1");
            $("#HDbody").css("padding-top", "0rem");
        }
    });
})