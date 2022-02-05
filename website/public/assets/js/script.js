$(document).ready(function(){    
    const mediaQuery = window.innerWidth;

    $(".nav__link").click(function(){
        // alert("hi");
        $(this).next(".sub__nav").slideToggle();
        // alert(12313);
    })

    if(mediaQuery < 768){
        // small desice and tabs
        $(".hamburger").click(function(){
            $(".header__nav").slideToggle(400);
        })

        $("")
    } else {
        // large device
        $(window).scroll(function () {
            var height = $(window).height();
            var height = height / 4;
            
            // croll after 1/4 of screen on big screen 
                // add fixed header class
                // remove absolute header class
                // give top 0 so just slide down effect 
            if ($(window).scrollTop() > height) {
                $(".body__header").removeClass("absolute__header");
                $(".body__header").addClass("fixed__header");
                $(".fixed__header").css({
                    top: 0,
                    transition: 'ease-in-out 300ms'
                })
                $(".sticky__enquiry").fadeIn();
                // console.log(1000);
            } else {
                $(".body__header").removeClass("fixed__header");
                $(".body__header").addClass("absolute__header");
            }
        });
    }
})