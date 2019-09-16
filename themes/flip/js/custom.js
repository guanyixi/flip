jQuery(document).ready(function($) {
$(function() {

    // Main Nav
    
    $(document).on('click', '.menu-toggle[data-status="close"]', function(){
        $('body').attr('data-nav','open');
        $(this).attr('data-status','open');
    });

    $(document).on('click', '.menu-toggle[data-status="open"]', function(){
        $('body').attr('data-nav','close');
        $(this).attr('data-status','close');
    });

    $('.menu-item-has-children').append('<button class="open-sub-nav"><i class="fas fa-chevron-down"></i></button>');
    $(document).on('click', '.open-sub-nav', function(){
        $(this).parent('li').toggleClass('sub-nav-open');
    });


    //Search box
    $('.search-form .search-input').focus(function(){
        $(this).siblings('button.clear-input').fadeIn();
    });
    $('.search-form .search-input').focusout(function(){
        $(this).siblings('button.clear-input').fadeOut();
    });
    $('button.clear-input').click(function(e){
        e.preventDefault();
        $(this).siblings('.search-input').val('');
    });

    //Scroll
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 44) {
        $("body").addClass("scrolled");
        }else{
        $("body").removeClass("scrolled");
        }
    });

    // Check screen size
    function screenCheck(){
        if($(window).width() > 992){
            $('body').attr('data-screen', 'big');
            $('.main-nav.mobile').fadeOut();
            $('body').removeClass('mobile-nav-open');
        }else{
            $('body').attr('data-screen', 'small');
        }
    }
    screenCheck();
    $(window).resize(function(){
        screenCheck();
    });


    //Toggle search field
    $('#toggle-search').click(function(){
        $('.search-form-wrapper').toggleClass('active');
    });


    //Accordion & Tabs
    function startAccordion($el){
        $($el).click(function(){
            $(this).next('.content').siblings('.content').slideUp();
            $(this).next('.content').slideToggle();
            $(this).siblings('.title').removeClass('active');
            $(this).toggleClass('active');
        });
    }

    function startTabs($el){
        $($el + ':first-child').addClass('active')
                                        .next('.content').show();

        $($el).click(function(){
            $(this).next('.content').siblings('.content').hide();
            $(this).next('.content').fadeIn();
            $(this).siblings('.title').removeClass('active');
            $(this).addClass('active');
        });
    }

    //Trigger accordion function on elements
    startAccordion('.component-accordion .title');
    startTabs('.component-tabs .title');



// Back to top button
  // Show or hide the sticky footer button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 400) {
            $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
    });

    // Animate the scroll to top
    $('.go-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
    });


    


}); //end anonymous function
}); //end document ready


