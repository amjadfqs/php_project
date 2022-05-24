$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("#navbar").addClass("fixed-top bg-primary navbar-dark").css("opacity", "0.97");
            $("#HDbody").css("padding-top", "6rem");
            $('[id="SpecialBtn"]').removeClass("btn-primary").addClass("btn-outline-secondary btn-light text-primary");
            $('[id="SpecialItem"]').removeClass("text-black").addClass("text-white")
        } else {
            $('[id="SpecialBtn"]').removeClass("btn-outline-secondary btn-light text-primary").addClass("btn-primary");
            $('[id="SpecialItem"]').removeClass("text-white").addClass("text-black")
            $("#navbar").removeClass("fixed-top bg-primary navbar-dark").css("opacity", "1");
            $("#HDbody").css("padding-top", "0rem");
        }
    });
})