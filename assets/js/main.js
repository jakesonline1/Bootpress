$(function() {

    // Cache the window object
    var $window = $(window);

   // Parallax background effect
   $('section[data-type="background"]').each(function() {

        var $bgobj = $(this); // assigning the object

        $(window).scroll(function() {

            //scroll the background at var speed
            // the ypos is a negative value because we are scrolling up

            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            
            // Put together our final background
            var coords = '50% '+ yPos + 'px';

            //move the background
            $bgobj.css({ backgroundPosition: coords});

        }); //end window scroll
   });
});