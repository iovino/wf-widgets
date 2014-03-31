$(document).ready(function(){
    $('.dropdown-menu').hover(function () {
        $(this).parent().toggleClass('active')
    });
});