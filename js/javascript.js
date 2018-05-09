$(document).ready(function(){
     $(".carousel").carousel();
});

$(".scroll").click(function() {
    var id = $(this).data('id');
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top},
        1000);
});
