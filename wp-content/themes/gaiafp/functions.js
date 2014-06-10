/**
 *   Unslider by @idiot
 */
 
(function($, f) {
	//  If there's no jQuery, Unslider can't work, so kill the operation.
	if(!$) return f;
	
	var Unslider = function() {
		//  Set up our elements
		this.el = f;
		this.items = f;
		
		//  Dimensions
		this.sizes = [];
		this.max = [0,0];
		
		//  Current inded
		this.current = 0;
		
		//  Start/stop timer
		this.interval = f;
				
		//  Set some options
		this.opts = {
			speed: 500,
			delay: 3000, // f for no autoplay
			complete: f, // when a slide's finished
			keys: !f, // keyboard shortcuts - disable if it breaks things
			dots: f, // display â€¢â€¢â€¢â€¢oâ€¢ pagination
			fluid: f // is it a percentage width?,
		};
		
		//  Create a deep clone for methods where context changes
		var _ = this;

		this.init = function(el, opts) {
			this.el = el;
			this.ul = el.children('ul');
			this.max = [el.outerWidth(), el.outerHeight()];			
			this.items = this.ul.children('li').each(this.calculate);
			
			//  Check whether we're passing any options in to Unslider
			this.opts = $.extend(this.opts, opts);
			
			//  Set up the Unslider
			this.setup();
			
			return this;
		};
		
		//  Get the width for an element
		//  Pass a jQuery element as the context with .call(), and the index as a parameter: Unslider.calculate.call($('li:first'), 0)
		this.calculate = function(index) {
			var me = $(this),
				width = me.outerWidth(), height = me.outerHeight();
			
			//  Add it to the sizes list
			_.sizes[index] = [width, height];
			
			//  Set the max values
			if(width > _.max[0]) _.max[0] = width;
			if(height > _.max[1]) _.max[1] = height;
		};
		
		//  Work out what methods need calling
		this.setup = function() {
			//  Set the main element
			this.el.css({
				overflow: 'hidden',
				width: _.max[0],
				height: this.items.first().outerHeight()
			});
			
			//  Set the relative widths
			this.ul.css({width: (this.items.length * 100) + '%', position: 'relative'});
			this.items.css('width', (100 / this.items.length) + '%');
			
			if(this.opts.delay !== f) {
				this.start();
				this.el.hover(this.stop, this.start);
			}
			
			//  Custom keyboard support
			this.opts.keys && $(document).keydown(this.keys);
			
			//  Dot pagination
			this.opts.dots && this.dots();
			
			//  Little patch for fluid-width sliders. Screw those guys.
			if(this.opts.fluid) {
				var resize = function() {
					_.el.css('width', Math.min(Math.round((_.el.outerWidth() / _.el.parent().outerWidth()) * 100), 100) + '%');
				};
				
				resize();
				$(window).resize(resize);
			}
			
			if(this.opts.arrows) {
				this.el.parent().append('<p class="arrows"><span class="prev">â†</span><span class="next">â†’</span></p>')
					.find('.arrows span').click(function() {
						$.isFunction(_[this.className]) && _[this.className]();
					});
			};
			
			//  Swipe support
			if($.event.swipe) {
				this.el.on('swipeleft', _.prev).on('swiperight', _.next);
			}
		};
		
		//  Move Unslider to a slide index
		this.move = function(index, cb) {
			//  If it's out of bounds, go to the first slide
			if(!this.items.eq(index).length) index = 0;
			if(index < 0) index = (this.items.length - 1);
			
			var target = this.items.eq(index);
			var obj = {height: target.outerHeight()};
			var speed = cb ? 5 : this.opts.speed;
			
			if(!this.ul.is(':animated')) {			
				//  Handle those pesky dots
				_.el.find('.dot:eq(' + index + ')').addClass('active').siblings().removeClass('active');

				this.el.animate(obj, speed) && this.ul.animate($.extend({left: '-' + index + '00%'}, obj), speed, function(data) {
					_.current = index;
					$.isFunction(_.opts.complete) && !cb && _.opts.complete(_.el);
				});
			}
		};
		
		//  Autoplay functionality
		this.start = function() {
			_.interval = setInterval(function() {
				_.move(_.current + 1);
			}, _.opts.delay);
		};
		
		//  Stop autoplay
		this.stop = function() {
			_.interval = clearInterval(_.interval);
			return _;
		};
		
		//  Keypresses
		this.keys = function(e) {
			var key = e.which;
			var map = {
				//  Prev/next
				37: _.prev,
				39: _.next,
				
				//  Esc
				27: _.stop
			};
			
			if($.isFunction(map[key])) {
				map[key]();
			}
		};
		
		//  Arrow navigation
		this.next = function() { return _.stop().move(_.current + 1) };
		this.prev = function() { return _.stop().move(_.current - 1) };
		
		this.dots = function() {
			//  Create the HTML
			var html = '<ol class="dots">';
				$.each(this.items, function(index) { html += '<li class="dot' + (index < 1 ? ' active' : '') + '">' + (index + 1) + '</li>'; });
				html += '</ol>';
			
			//  Add it to the Unslider
			this.el.addClass('has-dots').append(html).find('.dot').click(function() {
				_.move($(this).index());
			});
		};
	};
	
	//  Create a jQuery plugin
	$.fn.unslider = function(o) {
		var len = this.length;
		
		//  Enable multiple-slider support
		return this.each(function(index) {
			//  Cache a copy of $(this), so it 
			var me = $(this);
			var instance = (new Unslider).init(me, o);
			
			//  Invoke an Unslider instance
			me.data('unslider' + (len > 1 ? '-' + (index + 1) : ''), instance);
		});
	};
})(window.jQuery, false);



// NoConflict - here you can use $() instead of jQuery()
(function($) {

	// Smooth scrolling
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({ scrollTop: target.offset().top }, 1000);
				return false;
			}
		}
	});



	// Fixed menu on scroll
	$(window).bind('scroll', function() {
		if ($(window).scrollTop() > 38) { $('header').addClass('short'); }
		else { $('header').removeClass('short'); }
	});

//alert($('.single').height());
	// Fixed photo and sharing buttons on post
	$(window).bind('scroll', function() {
		if($(window).scrollTop() > 38 && $(window).scrollTop() < ($('.single').height() - 300)) { $('.photo-share').addClass('fixed'); }
		else { $('.photo-share').removeClass('fixed'); }
	});
	

	// Auto-focus contact form link
	$('a[href=#contact]').click(function() {
		$('#name').focus();
	});
	// Auto-focus newsletter link
	$('a[href=#newsletter]').click(function() {
		$('#email-newsletter').focus();
	});



	// Testimonials slider
	$(window).load(function() {
	    var unslider = $('.banner').unslider({
			speed: 750,               //  The speed to animate each slide (in milliseconds)
			delay: 20000,              //  The delay between slide animations (in milliseconds)
			complete: function() {},  //  A function that gets called after every slide animation
			keys: true,               //  Enable keyboard (left, right) arrow shortcuts
			dots: false,               //  Display dot navigation
			fluid: false              //  Support responsive design. May break non-responsive designs
		});
	
	
	    $('.unslider-arrow').click(function() {
	        var fn = this.className.split(' ')[1];
	        //  Either do unslider.data('unslider').next() or .prev() depending on the className
	        unslider.data('unslider')[fn]();
	    });
	});

})(jQuery);