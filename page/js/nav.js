$(document).click(function(){
    $('.nav').removeClass('open')
    $('.menu').removeClass('open')
});
$('.nav-trigger,.nav').click(function(e){e.stopPropagation()});
$('.nav-trigger').click(function(e){
    $('.nav').toggleClass('open');
    $(".menu").toggleClass("open")
})