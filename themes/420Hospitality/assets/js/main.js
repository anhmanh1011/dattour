"use strict";
jQuery( document ).ready( function ( $ ) {

//for Preloader

    $( window ).load( function () {
        $( "#loading" ).fadeOut( 500 );
    } );


    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $( '#navbar-menu' ).find( 'a[href*=#]:not([href=#])' ).click( function () {
        if ( location.pathname.replace( /^\//, '' ) == this.pathname.replace( /^\//, '' ) && location.hostname == this.hostname ) {
            var target = $( this.hash );
            target = target.length ? target : $( '[name=' + this.hash.slice( 1 ) + ']' );
            if ( target.length ) {
                $( 'html,body' ).animate( {
                    scrollTop: ( target.offset().top - 80 )
                }, 1000 );
                if ( $( '.navbar-toggle' ).css( 'display' ) != 'none' ) {
                    $( this ).parents( '.container' ).find( ".navbar-toggle" ).trigger( "click" );
                }
                return false;
            }
        }
    } );



    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW( {
        mobile: false // trigger animations on mobile devices (default is true)
    } );
    wow.init();

// magnificPopup

    $( '.popup-img' ).magnificPopup( {
        type: 'image',
        gallery: {
            enabled: true
        }
    } );

    $( '.video-link' ).magnificPopup( {
        type: 'iframe'
    } );



// slick slider active Home Page Tow
    $( ".service_slid_item" ).slick( {
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<i class='icon icon-chevron-left nextprevleft'></i>",
        nextArrow: "<i class='icon icon-chevron-right nextprevright'></i>",
        autoplay: true,
        autoplaySpeed: 2000
    } );


// slick slider active Home Page Tow
    $( ".choose_slide" ).slick( {
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: "<i class='icon icon-chevron-left nextprevleft'></i>",
        nextArrow: "<i class='icon icon-chevron-right nextprevright'></i>",
        autoplay: true,
        autoplaySpeed: 2000
    } );




//---------------------------------------------
// Counter 
//---------------------------------------------

    $( '.statistic-counter' ).counterUp( {
        delay: 10,
        time: 2000
    } );

//---------------------------------------------
// Scroll Up 
//---------------------------------------------

    $( '.scrollup' ).click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 1000 );
        return false;
    } );



//Team Skillbar active js

    jQuery( '.teamskillbar' ).each( function () {
        jQuery( this ).find( '.teamskillbar-bar' ).animate( {
            width: jQuery( this ).attr( 'data-percent' )
        }, 6000 );
    } );


// scrool Down

//$('.scrooldown a').bind('click', function () {
//    $('html , body').stop().animate({
//        scrollTop: $($(this).attr('href')).offset().top - 160
//    }, 1500, 'easeInOutExpo');
//    event.preventDefault();
//});

    //End

} );





$( function () {
    // Initialize Isotope
    var $notes = $( ".grid" ).isotope( {
        itemSelector: ".grid-item"
    } );

    // On filter button click
    $( ".filters-button-group .btn" ).on( "click", function ( e ) {
        var $this = $( this );

        // Prevent default behaviour
        e.preventDefault();

        // Toggle the active class on the correct button
        $( ".filters-button-group .btn" ).removeClass( "is-checked" );
        $this.addClass( "is-checked" );

        // Get the filter data attribute from the button
        $notes.isotope( {
            filter: $this.attr( "data-filter" )
        } );

    } );


    $( '.mouse-scroll' ).bind( 'click', function () {
        $( 'html , body' ).stop().animate( {
            scrollTop: $( $( this ).attr( 'href' ) ).offset().top - 60
        }, 1500, 'easeInOutExpo' );
        event.preventDefault();
    } );



} );



// fillter 

(function($) {
    
    "use strict";
    
    var DEBUG = false, // make true to enable debug output
      PLUGIN_IDENTIFIER = "RangeSlider";
  
    var RangeSlider = function( element, options ) {
      this.element = element;
      this.options = options || {};
      this.defaults = {
        output: {
          prefix: '', // function or string
          suffix: '', // function or string
          format: function(output){
            return output;
          }
        },
        change: function(event, obj){}
      };
      // This next line takes advantage of HTML5 data attributes
      // to support customization of the plugin on a per-element
      // basis.
      this.metadata = $(this.element).data('options');
    };

    RangeSlider.prototype = {

      ////////////////////////////////////////////////////
      // Initializers
      ////////////////////////////////////////////////////
      
      init: function() {
        if(DEBUG && console) console.log('RangeSlider init');
        this.config = $.extend( true, {}, this.defaults, this.options, this.metadata );

        var self = this;
        // Add the markup for the slider track
        this.trackFull = $('<div class="track track--full"></div>').appendTo(self.element);
        this.trackIncluded = $('<div class="track track--included"></div>').appendTo(self.element);
        this.inputs = [];
        
        $('input[type="range"]', this.element).each(function(index, value) {
          var rangeInput = this;
          // Add the ouput markup to the page.
          rangeInput.output = $('<output>').appendTo(self.element);
          // Get the current z-index of the output for later use
          rangeInput.output.zindex = parseInt($(rangeInput.output).css('z-index')) || 1;
          // Add the thumb markup to the page.
          rangeInput.thumb = $('<div class="slider-thumb">').prependTo(self.element);
          // Store the initial val, incase we need to reset.
          rangeInput.initialValue = $(this).val();
          // Method to update the slider output text/position
          rangeInput.update = function() {
            if(DEBUG && console) console.log('RangeSlider rangeInput.update');
            var range = $(this).attr('max') - $(this).attr('min'),
              offset = $(this).val() - $(this).attr('min'),
              pos = offset / range * 100 + '%',
              transPos = offset / range * -100 + '%',
              prefix = typeof self.config.output.prefix == 'function' ? self.config.output.prefix.call(self, rangeInput) : self.config.output.prefix,
              format = self.config.output.format($(rangeInput).val()),
              suffix = typeof self.config.output.suffix == 'function' ? self.config.output.suffix.call(self, rangeInput) : self.config.output.suffix;
            
            // Update the HTML
            $(rangeInput.output).html(prefix + '' + format + '' + suffix);
            $(rangeInput.output).css('left', pos);
            $(rangeInput.output).css('transform', 'translate('+transPos+',0)');
            
            // Update the IE hack thumbs
            $(rangeInput.thumb).css('left', pos);
            $(rangeInput.thumb).css('transform', 'translate('+transPos+',0)');
            
            // Adjust the track for the inputs
            self.adjustTrack();
          };
          
          // Send the current ouput to the front for better stacking
          rangeInput.sendOutputToFront = function() {
            $(this.output).css('z-index', rangeInput.output.zindex + 1);
          };
          
          // Send the current ouput to the back behind the other
          rangeInput.sendOutputToBack = function() {
            $(this.output).css('z-index', rangeInput.output.zindex);
          };
          
          ///////////////////////////////////////////////////
          // IE hack because pointer-events:none doesn't pass the 
          // event to the slider thumb, so we have to make our own.
          ///////////////////////////////////////////////////
          $(rangeInput.thumb).on('mousedown', function(event){
            // Send all output to the back
            self.sendAllOutputToBack();
            // Send this output to the front
            rangeInput.sendOutputToFront();
            // Turn mouse tracking on
            $(this).data('tracking', true);
            $(document).one('mouseup', function() {
              // Turn mouse tracking off
              $(rangeInput.thumb).data('tracking', false);
              // Trigger the change event
              self.change(event);
            });
          });
          
          // IE hack - track the mouse move within the input range
          $('body').on('mousemove', function(event){
            // If we're tracking the mouse move
            if($(rangeInput.thumb).data('tracking')) {
              var rangeOffset = $(rangeInput).offset(),
                relX = event.pageX - rangeOffset.left,
                rangeWidth = $(rangeInput).width();
              // If the mouse move is within the input area
              // update the slider with the correct value
              if(relX <= rangeWidth) {
                var val = relX/rangeWidth;
                $(rangeInput).val(val * $(rangeInput).attr('max'));
                rangeInput.update();
              }
            }
          });
          
          // Update the output text on slider change
          $(this).on('mousedown input change touchstart', function(event) {
            if(DEBUG && console) console.log('RangeSlider rangeInput, mousedown input touchstart');
            // Send all output to the back
            self.sendAllOutputToBack();
            // Send this output to the front
            rangeInput.sendOutputToFront();
            // Update the output
            rangeInput.update();
          });
          
          // Fire the onchange event 
          $(this).on('mouseup touchend', function(event){
            if(DEBUG && console) console.log('RangeSlider rangeInput, change');
            self.change(event);
          });
          
          // Add this input to the inputs array for use later
          self.inputs.push(this);
        });
        
        // Reset to set to initial values
        this.reset();
        
        // Return the instance
        return this;
      },
      
      sendAllOutputToBack: function() {
        $.map(this.inputs, function(input, index) {
          input.sendOutputToBack();
        });
      },
      
      change: function(event) {
        if(DEBUG && console) console.log('RangeSlider change', event);
        // Get the values of each input
        var values = $.map(this.inputs, function(input, index) {
          return {
            value: parseInt($(input).val()),
            min: parseInt($(input).attr('min')),
            max: parseInt($(input).attr('max'))
          };
        });
        
        // Sort the array by value, if we have 2 or more sliders
        values.sort(function(a, b) {
          return a.value - b.value;
        });
        
        // call the on change function in the context of the rangeslider and pass the values
        this.config.change.call(this, event, values);
      },
      
      reset: function() {
        if(DEBUG && console) console.log('RangeSlider reset');
        $.map(this.inputs, function(input, index) {
          $(input).val(input.initialValue);
          input.update();
        });
      },
      
      adjustTrack: function() {
        if(DEBUG && console) console.log('RangeSlider adjustTrack');
        var valueMin = Infinity,
          rangeMin = Infinity,
          valueMax = 0,
          rangeMax = 0;
        
        // Loop through all input to get min and max
        $.map(this.inputs, function(input, index) {
          var val = parseInt($(input).val()),
            min = parseInt($(input).attr('min')),
            max = parseInt($(input).attr('max'));
          
          // Get the min and max values of the inputs
          valueMin = (val < valueMin) ? val : valueMin;
          valueMax = (val > valueMax) ? val : valueMax;
          // Get the min and max possible values
          rangeMin = (min < rangeMin) ? min : rangeMin;
          rangeMax = (max > rangeMax) ? max : rangeMax;
        });
        
        // Get the difference if there are 2 range input, use max for one input.
        // Sets left to 0 for one input and adjust for 2 inputs
        if(this.inputs.length > 1) {
          this.trackIncluded.css('width', (valueMax - valueMin) / (rangeMax - rangeMin) * 100 + '%');
          this.trackIncluded.css('left', (valueMin - rangeMin) / (rangeMax - rangeMin) * 100 + '%');
        } else {
          this.trackIncluded.css('width', valueMax / (rangeMax - rangeMin) * 100 + '%');
          this.trackIncluded.css('left', '0%');
        }
      }
    };
  
    RangeSlider.defaults = RangeSlider.prototype.defaults;
    
    $.fn.RangeSlider = function(options) {
      if(DEBUG && console) console.log('$.fn.RangeSlider', options);
      return this.each(function() {
        var instance = $(this).data(PLUGIN_IDENTIFIER);
        if(!instance) {
          instance = new RangeSlider(this, options).init();
          $(this).data(PLUGIN_IDENTIFIER,instance);
        }
      });
    };
  
  }
)(jQuery);


var rangeSlider = $('#facet-price-range-slider');
if(rangeSlider.length > 0) {
  rangeSlider.RangeSlider({
    output: {
      format: function(output){
        return output.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
      },
      suffix: function(input){
        return parseInt($(input).val()) == parseInt($(input).attr('max')) ? this.config.maxSymbol : '';
      }
    }
  });
}




$(document).ready(function() {
  $('.custom_owl_2').owlCarousel({
  loop:true,
    autoplay: true,
    slideSpeed: 3000,
    margin:0,
    nav:false,
     navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
});

$( document ).ready(function() {
    $('html, body').animate({
        scrollTop: $('.up_here').offset().top-80
    }, 1000);
});