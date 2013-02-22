/*
 * scripts.js
 *
 * auto-concatenated jquery, modernizr and custom alternate files
 *
 */

//@codekit-prepend "libs/jquery-1.7.1.min.js";
//@codekit-prepend "libs/jquery.stickyfooter.js";
//@codekit-prepend "libs/jquery.flexslider.js";

$(document).ready(function() {
    $("#footer").stickyFooter();
});

$(window).load(function(){
      $('.flexslider').flexslider({
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
