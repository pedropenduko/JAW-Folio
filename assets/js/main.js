/* 
 * Main JavaScript for the JAW-Folio(Just.Another.WordPress Portfolio) Theme
 */
$(function() {
    
    "use strict";
    
    // Cache the window object
    var $window = $(window);
    var topoffset = 50;
    
    // Activate Scrollspy
    $('body').scrollspy({
        target: 'header .navbar',
        offset: topoffset
    });  
    

    
    var hash = $(this).find('li.active a').attr('href');

    
    // Parallax background effect
    $('section[data-type="background"]').each(function() {
        var $bgobj = $(this); // assigning the object
        
        $(window).scroll(function() {
            // scroll the background at var speed
            // the yPos is a negative value because we're scrolling it UP!
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            
            // Put together our final background position
            var coords = '50%' + yPos + 'px';
            
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        }); // end window scroll
    });
    
    
    // clean-up the purposely inserted class    
    function clean_custom_class() {
        $('.navbar a[href*=\\#]').each(function () {      
             $(this).removeClass("jaw-folio-current-menu-item");
        });     
    }
    
    
    // This is for smooth scrolling when clicking navigation
    $('.navbar a[href*=\\#]:not([href=\\#])').click(function() {
  
        clean_custom_class();
      
        // insert this class to the currently clicked 'a' tag
        // this is used specifically to highlight the custom menu links
        $(this).addClass("jaw-folio-current-menu-item");
        
        // now do a smooth scroll
        if (location.pathname.replace(/^\//,'') === 
                this.pathname.replace(/^\//,'') && 
                location.hostname === this.hostname) {
            var target = $(this.hash);

            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - topoffset + 2
                }, 500);
                return false;
            } //target.length
        } //click function
    }); //smooth scrolling        
});
