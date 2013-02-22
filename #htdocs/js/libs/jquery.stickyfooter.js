(function ( $ ) {


    // NOTE: This does not fix the double margins bug in IE7.
    $.fn.clipMargins = function () {
        return $(this).each(function () {
            var $e = $(this),
                myTop = $e.offset().top,
                myBottom = myTop + $e.height();
            $e.find("*").each(function () {
                var $t = $(this);
                if ($t.offset().top + $t.outerHeight(true) > myBottom) {
                    $t.css("margin-bottom", 0);
                }
                if(("" + $t.css("margin-top")).match(/\d+/) && $t.offset().top - parseInt($t.css("margin-top")) < myTop){
                    $t.css("margin-top", 0);
                }
            });
        });
    };

    $.fn.stickyFooter = function ( options ) {

        if($.browser.msie && $.browser.version < 7) {
          return $(this);
        }
        
        options = $.extend({
            clipMargins: true,
            footerPadClass: "footer_pad",
            nonFooterClass: "non_footer"
        }, options);

        return $(this).each(function () {
            var $footer = $(this),
                $doc = $footer.parent(),
                footerIndex = $doc.contents().index($footer),
                $beforeFooter = $doc.contents(":lt(" + footerIndex + ")"),
                $footerPad = $("<div class='" + options.footerPadClass + "'>&nbsp;</div>"),
                $nonFooter = $("<div class='" + options.nonFooterClass + "'></div>");
            
            // wrap everything before footer in a "non_footer" div
            $("body").prepend($nonFooter);
            $nonFooter
                .append($beforeFooter)
                .append($footerPad);

            // apply css tricks
            $("html, body").css("height", "100%");

            if ($.browser.msie && $.browser.version < 7) {
                $nonFooter.css({
                    height: "100%"
                });
            } else {
                $nonFooter.css({
                    minHeight: "100%"
                });
            }

            $nonFooter.css({
                overflow: "hidden",
                position: "relative"
            });

            $footer.css({
                height: $footer.height(),
                marginTop: -$footer.outerHeight(),
                position: "relative"
            });

            $footerPad.css({
                fontSize: 0,
                height: 0,
                lineHeight: 0,
                paddingBottom: $footer.outerHeight()
            });

            // fix interior element margin issue
            if (options.clipMargins) {
                $footer.clipMargins();
            }
        });
    };

}(jQuery));