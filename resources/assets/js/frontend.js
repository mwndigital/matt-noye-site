$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 0){
            $('header').addClass('scrolled');
        }
        else{
            $('header').removeClass('scrolled');
        }
    });
    //smooth page scrolling for homepage hero
    // Select all links with hashes
    $('a.smoothScroll[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually going to happen
                event.preventDefault();
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top
                    },
                    1000,
                    function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                            // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                    }
                );
            }
        }
    });

    $('.aboutMeCollapseBtn').click(function(){
        //$(this).find("i").toggleClass('fa-chevron-down fa-chevron-up');
        if($(this).html() == "Read more <i class=\"fas fa-chevron-down\"></i>"){
            $(this).html("Read less <i class=\"fas fa-chevron-up\"></i>");
        }
        else {
            $(this).html("Read more <i class=\"fas fa-chevron-down\"></i>")
        }
    });

    $('button.hireMeBtn').click(function(){
        $('.hireMePopup').addClass('show');
        $('body').attr('style', 'overflow:hidden');
    });
    $('button.closeHireMePopupBtn').click(function(){
       $('.hireMePopup').removeClass('show');
       $('body').attr('style', 'overflow:auto');
    });
});
import Typed from 'typed.js';
//Homepage hero typewriter
var options = {
    strings: ['Bespoke websites', 'WordPress Websites', 'WooCommerce Websites', 'HubSpot Websites', 'Shopfiy websites', 'custom web applications', 'and much more...'],
    typeSpeed: 150,
    loop: true,
    startDelay: 300,
    backDelay: 900,
}
var typed = new Typed('#homepageTypeWriter', options);
