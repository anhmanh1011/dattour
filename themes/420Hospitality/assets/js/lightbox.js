/**
 * jQuery Lightbox
 * Version 0.5 - 11/29/2007
 * @author Warren Krewenki
 *
 * Changes by:
 * @author Krzysztof Kotowicz <koto at webworkers dot pl>:
 *  - bugfix: multiple instances of Lightbox galleries allowed
 *    (using opts variable instead of $.fn.lightbox.defaults)
 *  - bugfix: use var for local variables in a few functions
 *  - added support for navbarOnTop setting
 *  - added support for displayTitle setting
 *  - added support for slideNavBar setting (with slideNavBarSpeed)
 *  - added support for displayHelp setting
 *  - added support for fitToScreen setting (ported Lightbox VinDSL hack)
 *    (see http://www.huddletogether.com/forum/comments.php?DiscussionID=307)
 *  - plugin now uses jQuery.width() and jQuery.height()
 *  - removed eval() calls
 *  - removed destroyElement - uses jQuery.remove()
 *  - use of prevLinkText, nextLinkText and help
 *  - all strings are now placed in opts.strings to allow for customization/translation
 *
 * Based on Lightbox 2 by Lokesh Dhakar (http://www.huddletogether.com/projects/lightbox2/)
 * Originally written to make use of the Prototype framework, and Script.acalo.us, now altered to use jQuery.
 *
 Thay đổi bởi nguyenvanhoalh - ngày 29/07/2012
 - Thêm slide tự động chạy ảnh
 - Thêm fix minwidth, maxwidth cho các ảnh
 - Chuyển các thẻ img của ảnh loading, close về dạng background của thẻ a
 **/

(function (jQuery) {
    var opts;

    jQuery.fn.lightbox = function (options) {
        // build main options
        opts = jQuery.extend({}, jQuery.fn.lightbox.defaults, options);

        // initalize the lightbox
        jQuery.fn.lightbox.initialize();
        return this.each(function () {
            jQuery(this).click(function () {
                jQuery(this).lightbox.start(this);
                return false;
            });
        });
    };

    // lightbox functions
    jQuery.fn.lightbox.initialize = function () {
        jQuery('#overlay').remove();
        jQuery('#lightbox').remove();
        opts.inprogress = false;
        var outerImage = '<div id="outerImageContainer"><div id="imageContainer"><img id="lightboxImage"><div id="hoverNav"><a href="javascript://" title="' + opts.strings.prevLinkTitle + '" id="prevLink"></a><a href="javascript://" id="nextLink" title="' + opts.strings.nextLinkTitle + '"></a></div><div id="loadingLightBox"><a href="javascript://" id="loadingLink">&nbsp;</a></div></div></div>';
        var imageData = '<div id="imageDataContainer" class="clearfix"><div id="imageData"><div id="imageDetails"><span id="numberDisplay"></span><span id="caption"></span></div><div id="bottomNav">'

        if (opts.displayHelp)
            imageData += '<span id="helpDisplay">' + opts.strings.help + '</span>';

        imageData += '<a href="javascript://" id="bottomNavClose" title="' + opts.strings.closeTitle + '"><span>Đóng lại</span></a></div><div id="navControls"></div></div></div>';

        var string;

        //        if (opts.navbarOnTop) {
        //            string = '<div id="overlay"></div><div id="lightbox">' + imageData + outerImage + '</div>';
        //            jQuery("body").append(string);
        //            jQuery("#imageDataContainer").addClass('ontop');
        //        } else {
        //            string = '<div id="overlay"></div><div id="lightbox">' + outerImage + imageData + '</div>';
        //            jQuery("body").append(string);
        //        }

        string = '<div id="overlay"></div><div id="lightbox">' + outerImage + '</div>';
        jQuery("body").append(string);

        jQuery("#outerImageContainer").append(imageData);



        jQuery("#overlay").click(function () { jQuery.fn.lightbox.end(); }).hide();
        jQuery("#lightbox").click(function () { jQuery.fn.lightbox.end(); }).hide();
        jQuery("#loadingLink").click(function () { jQuery.fn.lightbox.end(); return false; });
        jQuery("#bottomNavClose").click(function () { jQuery.fn.lightbox.end(); return false; });
        jQuery('#outerImageContainer').width(opts.widthCurrent).height(opts.heightCurrent);
        jQuery('#imageDataContainer').width(opts.widthCurrent);
    };

    jQuery.fn.lightbox.getPageSize = function () {
        var xScroll, yScroll;

        if (window.innerHeight && window.scrollMaxY) {
            xScroll = window.innerWidth + window.scrollMaxX;
            yScroll = window.innerHeight + window.scrollMaxY;
        } else if (document.body.scrollHeight > document.body.offsetHeight) { // all but Explorer Mac
            xScroll = document.body.scrollWidth;
            yScroll = document.body.scrollHeight;
        } else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
            xScroll = document.body.offsetWidth;
            yScroll = document.body.offsetHeight;
        }

        var windowWidth, windowHeight;

        if (self.innerHeight) { // all except Explorer
            if (document.documentElement.clientWidth) {
                windowWidth = document.documentElement.clientWidth;
            } else {
                windowWidth = self.innerWidth;
            }
            windowHeight = self.innerHeight;
        } else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
            windowWidth = document.documentElement.clientWidth;
            windowHeight = document.documentElement.clientHeight;
        } else if (document.body) { // other Explorers
            windowWidth = document.body.clientWidth;
            windowHeight = document.body.clientHeight;
        }

        // for small pages with total height less then height of the viewport
        if (yScroll < windowHeight) {
            pageHeight = windowHeight;
        } else {
            pageHeight = yScroll;
        }


        // for small pages with total width less then width of the viewport
        if (xScroll < windowWidth) {
            pageWidth = xScroll;
        } else {
            pageWidth = windowWidth;
        }

        var arrayPageSize = new Array(pageWidth, pageHeight, windowWidth, windowHeight);
        return arrayPageSize;
    };


    jQuery.fn.lightbox.getPageScroll = function () {
        var xScroll, yScroll;

        if (self.pageYOffset) {
            yScroll = self.pageYOffset;
            xScroll = self.pageXOffset;
        } else if (document.documentElement && document.documentElement.scrollTop) {  // Explorer 6 Strict
            yScroll = document.documentElement.scrollTop;
            xScroll = document.documentElement.scrollLeft;
        } else if (document.body) {// all other Explorers
            yScroll = document.body.scrollTop;
            xScroll = document.body.scrollLeft;
        }

        var arrayPageScroll = new Array(xScroll, yScroll);
        return arrayPageScroll;
    };

    jQuery.fn.lightbox.pause = function (ms) {
        var date = new Date();
        var curDate = null;
        do { curDate = new Date(); }
        while (curDate - date < ms);
    };

    jQuery.fn.lightbox.start = function (imageLink) {

        jQuery("select, embed, object").hide();
        var arrayPageSize = jQuery.fn.lightbox.getPageSize();
        jQuery("#overlay").hide().css({ width: '100%', height: arrayPageSize[1] + 'px', opacity: opts.overlayOpacity }).fadeIn();
        opts.imageArray = [];
        imageNum = 0;

        var anchors = document.getElementsByTagName(imageLink.tagName);

        // if image is NOT part of a set..
        if (!imageLink.rel || (imageLink.rel == '')) {
            // add single image to Lightbox.imageArray
            opts.imageArray.push(new Array(imageLink.href, opts.displayTitle ? imageLink.title : ''));
        } else {
            // if image is part of a set..
            jQuery("a").each(function () {
                if (this.href && (this.rel == imageLink.rel)) {
                    opts.imageArray.push(new Array(this.href, opts.displayTitle ? this.title : ''));
                }
            })


            for (i = 0; i < opts.imageArray.length; i++) {
                for (j = opts.imageArray.length - 1; j > i; j--) {
                    if (opts.imageArray[i][0] == opts.imageArray[j][0]) {
                        opts.imageArray.splice(j, 1);
                    }
                }
            }
            while (opts.imageArray[imageNum][0] != imageLink.href) { imageNum++; }
        }

        // calculate top and left offset for the lightbox
        var arrayPageScroll = jQuery.fn.lightbox.getPageScroll();
        var lightboxTop = arrayPageScroll[1] + (arrayPageSize[3] / 10);
        var lightboxLeft = arrayPageScroll[0];
        jQuery('#lightbox').css({ top: lightboxTop + 'px', left: lightboxLeft + 'px' }).show();


        if (!opts.slideNavBar)
            jQuery('#imageData').hide();

        if (opts.imageArray.length < 2)
            jQuery('#navControls').hide();

        jQuery.fn.lightbox.changeImage(imageNum);

    };

    jQuery.fn.lightbox.changeImage = function (imageNum) {
        if (opts.inprogress == false) {
            opts.inprogress = true;

            opts.activeImage = imageNum; // update global var

            // hide elements during transition
            jQuery('#loadingLightBox').show();
            jQuery('#lightboxImage').hide();
            jQuery('#hoverNav').hide();
            jQuery('#prevLink').hide();
            jQuery('#nextLink').hide();

            if (opts.slideNavBar) { // delay preloading image until navbar will slide up
                // jQuery('#imageDataContainer').slideUp(opts.navBarSlideSpeed, jQuery.fn.doChangeImage);
                jQuery('#imageDataContainer').hide();
                jQuery('#imageData').hide();
                jQuery.fn.doChangeImage();
            } else {
                jQuery.fn.doChangeImage();
            }

            window.clearInterval(opts.slideInterval);
            opts.slideInterval = self.setInterval(function () {
                if (opts.autoPlay) {
                    if (opts.activeImage < opts.imageArray.length - 1)
                        jQuery.fn.lightbox.changeImage(opts.activeImage + 1);
                    else {
                        if (opts.circle)
                            jQuery.fn.lightbox.changeImage(0);
                        else {
                            //jQuery.fn.lightbox.end();
                            window.clearInterval(opts.slideInterval);
                        }
                    }
                }
                else {
                    window.clearInterval(opts.slideInterval);
                }
            }, opts.autoSpeed);
        }
    };




    jQuery.fn.doChangeImage = function () {

        imgPreloader = new Image();

        // once image is preloaded, resize image container
        imgPreloader.onload = function () {
            var newWidth = imgPreloader.width;
            var newHeight = imgPreloader.height;

            if (opts.imageMinWidth) {
                if (newWidth < opts.imageMinWidth) {
                    newHeight = newHeight * opts.imageMinWidth / newWidth;
                    newWidth = opts.imageMinWidth;
                }
            }

            if (opts.imageMaxWidth) {
                if (newWidth > opts.imageMaxWidth) {
                    newHeight = newHeight * opts.imageMaxWidth / newWidth;
                    newWidth = opts.imageMaxWidth;
                }
            }


            if (opts.fitToScreen) {
                var arrayPageSize = jQuery.fn.lightbox.getPageSize();
                var ratio;
                var initialPageWidth = arrayPageSize[2] - 2 * opts.borderSize;
                var initialPageHeight = arrayPageSize[3] - 200;

                //                if (imgPreloader.height > initialPageHeight) {
                //                    newWidth = parseInt((initialPageHeight / imgPreloader.height) * imgPreloader.width);
                //                    newHeight = initialPageHeight;
                //                }
                //                else if (imgPreloader.width > initialPageWidth) {
                //                    newHeight = parseInt((initialPageWidth / imgPreloader.width) * imgPreloader.height);
                //                    newWidth = initialPageWidth;
                //                }

                //if (newHeight > initialPageHeight) {
                //    newWidth = parseInt((initialPageHeight / imgPreloader.height) * imgPreloader.width);
                //    newHeight = initialPageHeight;
                //}
                if (newWidth > initialPageWidth) {
                    newHeight = parseInt((initialPageWidth / imgPreloader.width) * imgPreloader.height);
                    newWidth = initialPageWidth;
                }


            }


            jQuery('#lightboxImage').attr('src', opts.imageArray[opts.activeImage][0])
							   .width(newWidth).height(newHeight);
            jQuery.fn.lightbox.resizeImageContainer(newWidth, newHeight);
        }

        imgPreloader.src = opts.imageArray[opts.activeImage][0];
    }

    jQuery.fn.lightbox.end = function () {
        jQuery.fn.lightbox.disableKeyboardNav();
        jQuery('#lightbox').hide();
        jQuery('#overlay').fadeOut();
        jQuery('select, object, embed').show();
    };

    jQuery.fn.lightbox.preloadNeighborImages = function () {
        if ((opts.imageArray.length - 1) > opts.activeImage) {
            preloadNextImage = new Image();
            preloadNextImage.src = opts.imageArray[opts.activeImage + 1][0];
        }
        if (opts.activeImage > 0) {
            preloadPrevImage = new Image();
            preloadPrevImage.src = opts.imageArray[opts.activeImage - 1][0];
        }
    };

    jQuery.fn.lightbox.keyboardAction = function (e) {
        if (e == null) { // ie
            var keycode = event.keyCode;
            var escapeKey = 27;
        } else { // mozilla
            var keycode = e.keyCode;
            var escapeKey = e.DOM_VK_ESCAPE;
        }

        var key = String.fromCharCode(keycode).toLowerCase();

        if ((key == 'x') || (key == 'o') || (key == 'c') || (keycode == escapeKey)) { // close lightbox
            jQuery.fn.lightbox.end();
        } else if ((key == 'p') || (keycode == 37)) { // display previous image
            if (opts.activeImage != 0) {
                jQuery.fn.lightbox.disableKeyboardNav();
                jQuery.fn.lightbox.changeImage(opts.activeImage - 1);
            }
        } else if ((key == 'n') || (keycode == 39)) { // display next image
            if (opts.activeImage != (opts.imageArray.length - 1)) {
                jQuery.fn.lightbox.disableKeyboardNav();
                jQuery.fn.lightbox.changeImage(opts.activeImage + 1);
            }
        }
    };

    jQuery.fn.lightbox.resizeImageContainer = function (imgWidth, imgHeight) {

        // get current width and height
        opts.widthCurrent = document.getElementById('outerImageContainer').offsetWidth;
        opts.heightCurrent = document.getElementById('outerImageContainer').offsetHeight;

        // get new width and height
        var widthNew = (imgWidth + (opts.borderSize * 2));
        var heightNew = (imgHeight + (opts.borderSize * 2));

        // scalars based on change from old to new
        opts.xScale = (widthNew / opts.widthCurrent) * 100;
        opts.yScale = (heightNew / opts.heightCurrent) * 100;

        // calculate size difference between new and old image, and resize if necessary
        wDiff = opts.widthCurrent - widthNew;
        hDiff = opts.heightCurrent - heightNew;

        /*swing or linear*/
        jQuery('#imageDataContainer').animate({ width: widthNew - 20 }, opts.resizeSpeed, 'linear');
        jQuery('#outerImageContainer').animate({ width: widthNew - 20, height: heightNew - 20 }, opts.resizeSpeed, 'linear');


        jQuery('#imageDataContainer').animate({ width: widthNew }, opts.resizeSpeed, 'linear');
        jQuery('#outerImageContainer').animate({ width: widthNew, height: heightNew }, opts.resizeSpeed, 'linear', function () {
            jQuery.fn.lightbox.showImage();
        });


        // if new and old image are same size and no scaling transition is necessary,
        // do a quick pause to prevent image flicker.
        if ((hDiff == 0) && (wDiff == 0)) {
            if (jQuery.browser.msie) { jQuery.fn.lightbox.pause(250); } else { jQuery.fn.lightbox.pause(100); }
        }

        jQuery('#prevLink').height(imgHeight);
        jQuery('#nextLink').height(imgHeight);
    };

    jQuery.fn.lightbox.showImage = function () {
        jQuery('#loadingLightBox').hide();
        jQuery('#lightboxImage').fadeIn("fast");
        jQuery.fn.lightbox.updateDetails();
        jQuery.fn.lightbox.preloadNeighborImages();

        opts.inprogress = false;
    };

    jQuery.fn.lightbox.updateDetails = function () {

        if (opts.imageArray[opts.activeImage][1]) {
            jQuery('#caption').html("&nbsp;-&nbsp;" + opts.imageArray[opts.activeImage][1]).show();
        }

        // if image is part of set display 'Image x of x'
        if (opts.imageArray.length > 1) {
            var nav_html;

            nav_html = opts.strings.image + (opts.activeImage + 1) + opts.strings.of + opts.imageArray.length;
            jQuery('#numberDisplay').html(nav_html).show();

            nav_html = '<a title="' + opts.strings.firstLinkTitle + '" href="#" id="firstLinkText">' + opts.strings.firstLinkText + "</a>";
            // display previous / next text links
            //if ((opts.activeImage) > 0) {
            nav_html += '<a title="' + opts.strings.prevLinkTitle + '" href="#" id="prevLinkText">' + opts.strings.prevLinkText + "</a>";
            //}
            nav_html += '<a title="' + opts.strings.pauseLinkTitle + '" href="#" id="pauseLinkText">' + opts.strings.pauseLinkText + "</a>";
            nav_html += '<a title="' + opts.strings.playLinkTitle + '" href="#" id="playLinkText">' + opts.strings.playLinkText + "</a>";
            //if ((opts.activeImage + 1) < opts.imageArray.length) {
            nav_html += '<a title="' + opts.strings.nextLinkTitle + '" href="#" id="nextLinkText">' + opts.strings.nextLinkText + "</a>";
            //}
            nav_html += '<a title="' + opts.strings.lastLinkTitle + '" href="#" id="lastLinkText">' + opts.strings.lastLinkText + "</a>";

            jQuery('#navControls').html(nav_html).show();


            if (opts.autoPlay) {
                jQuery('#pauseLinkText').show();
                jQuery('#playLinkText').hide();
            }
            else {

                jQuery('#playLinkText').show();
                jQuery('#pauseLinkText').hide();
            }
        }

        if (opts.slideNavBar) {
            jQuery("#imageData").slideDown(opts.navBarSlideSpeed);
        } else {
            jQuery("#imageData").show();
        }

        var arrayPageSize = jQuery.fn.lightbox.getPageSize();
        jQuery('#overlay').height(arrayPageSize[1]);
        jQuery.fn.lightbox.updateNav();
    };

    jQuery.fn.lightbox.updateNav = function () {
        jQuery('#hoverNav').show();

        // if not first image in set, display prev image button
        //if (opts.activeImage != 0) {
        jQuery('#prevLink,#prevLinkText').show().click(function () {
            if (opts.activeImage > 0)
                jQuery.fn.lightbox.changeImage(opts.activeImage - 1);
            else
                jQuery.fn.lightbox.changeImage(opts.imageArray.length - 1);

            return false;
        });
        //}

        // if not last image in set, display next image button
        //if (opts.activeImage != (opts.imageArray.length - 1)) {
        jQuery('#nextLink,#nextLinkText').show().click(function () {

            if (opts.activeImage < opts.imageArray.length - 1)
                jQuery.fn.lightbox.changeImage(opts.activeImage + 1);
            else
                jQuery.fn.lightbox.changeImage(0);

            return false;
        });
        //}

        jQuery('#firstLinkText').show().click(function () {

            jQuery.fn.lightbox.changeImage(0); return false;
        });

        jQuery('#lastLinkText').show().click(function () {

            jQuery.fn.lightbox.changeImage(opts.imageArray.length - 1); return false;
        });


        jQuery('#pauseLinkText').click(function () {
            jQuery('#pauseLinkText').hide();
            jQuery('#playLinkText').show();
            opts.autoPlay = false; return false;
        });

        jQuery('#playLinkText').click(function () {
            jQuery('#playLinkText').hide();
            jQuery('#pauseLinkText').show();

            opts.autoPlay = true;

            if (opts.activeImage < opts.imageArray.length - 1)
                jQuery.fn.lightbox.changeImage(opts.activeImage + 1);
            else
                jQuery.fn.lightbox.changeImage(0);

            return false;
        });

        jQuery.fn.lightbox.enableKeyboardNav();
    };


    jQuery.fn.lightbox.enableKeyboardNav = function () {
        document.onkeydown = jQuery.fn.lightbox.keyboardAction;
    };

    jQuery.fn.lightbox.disableKeyboardNav = function () {
        document.onkeydown = '';
    };

    jQuery.fn.lightbox.defaults = {
        fileLoadingImage: 'css/loading.gif',
        fileBottomNavCloseImage: 'css/closelabel.gif',
        overlayOpacity: 0.8,
        borderSize: 0,
        imageArray: new Array,
        activeImage: null,
        inprogress: false,
        resizeSpeed: 350,
        widthCurrent: 250,
        heightCurrent: 250,
        xScale: 1,
        yScale: 1,
        displayTitle: true,
        navbarOnTop: false,
        slideNavBar: false, // slide nav bar up/down between image resizing transitions
        navBarSlideSpeed: 550,
        displayHelp: false,
        strings: {
            help: ' \u2190 / P - previous image\u00a0\u00a0\u00a0\u00a0\u2192 / N - next image\u00a0\u00a0\u00a0\u00a0ESC / X - close image gallery',
            prevLinkTitle: 'Previous image',
            nextLinkTitle: 'Next image',
            firstLinkTitle: 'First image',
            lastLinkTitle: 'Last image',
            playLinkTitle: 'Auto play',
            pauseLinkTitle: 'Pause',

            prevLinkText: '&nbsp;',
            nextLinkText: '&nbsp;',
            firstLinkText: '&nbsp;',
            lastLinkText: '&nbsp;',
            playLinkText: '&nbsp;',
            pauseLinkText: '&nbsp;',
            closeTitle: 'Close image gallery',
            image: 'Ảnh ',
            of: '/'
        },
        fitToScreen: true, 	// resize images if they are bigger than window
        imageMinWidth: 250, //set minwidth by px: imageMinWidth:800 or imageMinWidth: false
        imageMaxWidth: 1000,  //set minwidth by px: imageMinWidth:800 or imageMinWidth: false        
        slideInterval: false,
        autoPlay: false, //Set auto play
        autoSpeed: 5000,
        circle: false //true: slide to first image after show last image
    };
})(jQuery);