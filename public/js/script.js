$(function() {

var count = 0;

$('.header-menu div>ul>li>a').on('click', function(e) {
    e.preventDefault();
});

$('.main-subscribe-cat-item').on('click', function () {

    if($(this).hasClass('check')){
        $(this).removeClass('check');
            count--;
            if(count == 0){
                $('.main-subscribe-form .btn p').text('Nothing selected');   
            }else if(count == 1) {
                $('.main-subscribe-form .btn p').text('1 category');   
            }else{
                $('.main-subscribe-form .btn p').text(count + ' categories');   
            }
            console.log(count);
          
    }else{
        $(this).addClass('check');
            count++;
            if(count == 1){
                $('.main-subscribe-form .btn p').text('1 category');   
            }else{
                $('.main-subscribe-form .btn p').text(count + ' categories');   
            }
            console.log(count);
    }
});

$('.open-modal').on('click', function(e) {

    e.preventDefault();

    if ($('.modal-cnt').css('display') == "none") {
        $('.modal-cnt').fadeIn(300);
        $('#overlay').fadeIn(300);
    } else {
        $('.modal-cnt').fadeOut(300);
        $('#overlay').fadeOut(300);
    }

});

$('.reg-modal-forgot-pass a').on('click', function () {
    $('.modal-cnt').fadeOut(300);
    $('.pass-cnt').fadeIn(300);
});

$('.close-modal').on('click', function() {
    $('.modal-cnt').fadeOut(300);
    $('.pass-cnt').fadeOut(300);
    $('.change-pass-cnt').fadeOut(300);
    $('#overlay').fadeOut(300);
});

$('#change-pass-cnt').on('click', function(e) {
    e.preventDefault();

    if ($('.change-pass-cnt').css('display') == "none") {
        $('.change-pass-cnt').fadeIn(300);
        $('#overlay').fadeIn(300);
    } else {
        $('.change-pass-cnt').fadeOut(300);
        $('#overlay').fadeOut(300);
    }
});

$('.main-subscribe-form .btn').on('click', function() {
    if($('.main-subscribe-cat').css('display') == 'none'){
        $('.main-subscribe-cat').slideDown(300);
        $('.main-subscribe-form .btn i').addClass('rotate');
    }else{
        $('.main-subscribe-cat').slideUp(300);
        $('.main-subscribe-form .btn i').removeClass('rotate');
    }
});

 //Scrol Up
 if ($('#to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#to-top').addClass('show');
            } else {
                $('#to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function() {
        backToTop();
    });
    $('#to-top').on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

$('#open-menu').on('click', function() {
    if ($('.mobile-menu').css('display') == "none") {
        $('.mobile-menu').slideDown(300);

    } else {
        $('.no-click-mob').next('ul').slideUp(300);
        $('.mobile-menu').slideUp(300);
    }
});

$('#close-menu').on('click', function() {
    $('.no-click-mob').next('ul').slideUp(300);
    $('.mobile-menu').slideUp(300);
});

$('.no-click-mob').on('click', function(e) {
    e.preventDefault();
    if($(this).next('ul').css('display') == "none"){
        $(this).next('ul').slideDown(300);
    }else{
        $(this).next('ul').slideUp(300);
    }
})


});