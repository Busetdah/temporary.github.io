$(".navbar-inner").hover(function(){
    $(".navbar-inner").addClass("cust-anim");
    $(".navbar-inner span").fadeIn(200);
}, function(){
    $(".navbar-inner span").fadeOut(200);
    $(".navbar-inner").removeClass("cust-anim");
});
$(".navbar-inner span").click(function(){
    $(".navbar-inner span").removeClass("active");
    $(this).addClass("active");
});
$(".navbar-inner a").on("click", function(){
    $(".navbar-inner a").removeClass("active-bar");
    $(this).addClass("active-bar");
 });