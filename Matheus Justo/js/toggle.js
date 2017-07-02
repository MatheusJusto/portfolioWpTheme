$(function() {
    $('.toggle').click(function(){
        $('.layout').toggleClass('ativo');
        $('.hamburguerMenu').toggleClass('ativo');
        $(this).toggleClass('ativo');
    });
});