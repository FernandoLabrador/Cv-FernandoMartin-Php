$(function(){
    // NavBar
    $('.fa-bars').click(function() {
        $('nav ul li').addClass("show");
        $('.fa-times').css("display","block");
        $('.fa-bars').css("display","none");
    });    
    $('.fa-times').click(function() {
        $('nav ul li').removeClass("show");
        $('.fa-bars').css("display","block");
        $('.fa-times').css("display","none");
    });
});
