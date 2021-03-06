
jQuery(function($) {
    
    
    if($('section').hasClass('intro')){
        var rellax__cloud = new Rellax('.parallax__cloud');
        var rellax__mountain1 = new Rellax('.parallax__mountain--1');
        var rellax__mountain2 = new Rellax('.parallax__mountain--2');
        var rellax__mountain3 = new Rellax('.parallax__mountain--3');
        var rellax__shrubs = new Rellax('.parallax__shrubs');
        var rellax__h1 = new Rellax('.parallax h1'); 
    }
    
    /* when submitting people form */
	$('form.contact__form').on('submit', function (e) {
        
        $('.error').remove();
        
        var errors = false;
        
        if($('.form__name').val().length < 1){
            $('.form__name').after('<div class="error">Please let me know your name!</div>');
            errors = true;
        }
        
        if(!(validateEmail($('.form__email').val())) && $('.form__email').val().length < 2){
            $('.form__email').after('<div class="error">I can\'t reply to you if I don\'t know your email address!</div>');
            errors = true;
        }
        
        if($('.form__msg').val().length < 1){
            $('.form__msg').after('<div class="error">Let me know what you want to talk about.</div>');
            errors = true;
        }
        
		e.preventDefault();
		
        if(!errors){
            $.ajax({
                type: 'POST',
                url: '../inc/form_submit.php',
                data: $('form').serialize(),
                success: function () {
                    $('.contact__form').fadeOut(400).delay(3000).fadeIn(400);
                }
            });
        }
	});
    
    $('.owl-carousel').owlCarousel({
        center:true,
        items:1,
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    });
    
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    
    
});
 
;(function(window) {
    
   
    /*-- Portflolio hover effects --*/

	'use strict';

	/**
	 * StackFx: The parent class.
	 */
	function StackFx(el) {
		this.DOM = {};
		this.DOM.el = el;
		this.DOM.stack = this.DOM.el.querySelector('.stack');
		this.DOM.stackItems = [].slice.call(this.DOM.stack.children);
		this.totalItems = this.DOM.stackItems.length;
		this.DOM.img = this.DOM.stack.querySelector('.stack__figure > .stack__img');
		//this.DOM.caption = this.DOM.el.querySelector('.grid__item-caption');
		//this.DOM.title = this.DOM.caption.querySelector('.grid__item-title');
		//this.DOM.columns = {left: this.DOM.caption.querySelector('.column--left'), right: this.DOM.caption.querySelector('.column--right')};
	}

	StackFx.prototype._removeAnimeTargets = function() {
		anime.remove(this.DOM.stackItems);
		anime.remove(this.DOM.img);
		//anime.remove(this.DOM.title);
		//anime.remove(this.DOM.columns.left);
		//anime.remove(this.DOM.columns.right);
	};

	
	/************************************************************************
	 * FolioFx.
	 ************************************************************************/
	function FolioFx(el) {
		StackFx.call(this, el);
		this._initEvents();
	}

	FolioFx.prototype = Object.create(StackFx.prototype);
	FolioFx.prototype.constructor = FolioFx;

	FolioFx.prototype._initEvents = function() {
		var self = this;
		this._mouseenterFn = function() {
			self._removeAnimeTargets();
			self._in();
		};
		this._mouseleaveFn = function() {
			self._removeAnimeTargets();
			self._out();
		};
		this.DOM.stack.addEventListener('mouseenter', this._mouseenterFn);
		this.DOM.stack.addEventListener('mouseleave', this._mouseleaveFn);
	};

	FolioFx.prototype._in = function() {
		var self = this;

		this.DOM.stackItems.map(function(e, i) {
			e.style.opacity = i !== self.totalItems - 1 ? 0.2*i+0.2 : 1
		});

		anime({
			targets: this.DOM.stackItems,
			duration: 1000,
			easing: 'easeOutExpo',
			translateY: function(target, index) {
				return -1*index*5;
			},
			rotate: function(target, index, cnt) {
				if( index === cnt - 1 ) {
					return 0;
				}
				else {
					return index%2 ? (cnt-index)*1 : -1*(cnt-index)*1;
				}
			},
			scale: function(target, index, cnt) {
				if( index === cnt - 1 ) {
					return 1;
				}
				else {
					return 1.05;
				}
			},
			delay: function(target, index, cnt) {
				return (cnt-index-1)*30
			}
		});
		
		anime({
			targets: this.DOM.img,
			duration: 1000,
			easing: 'easeOutExpo',
			scale: 0.9
		});

		/*anime({
			targets: [this.DOM.columns.left, this.DOM.columns.right],
			duration: 1000,
			easing: 'easeOutExpo',
			translateX: function(target, index) {
				return index === 0 ? -30 : 30;
			}
		});*/
		
	};

	FolioFx.prototype._out = function() {
		var self = this;

		anime({
			targets: this.DOM.stackItems,
			duration: 500,
			easing: 'easeOutExpo',
			translateY: 0,
			rotate: 0,
			scale: 1,
			opacity: function(target, index, cnt) {
				return index !== cnt - 1 ? 0 : 1
			}
		});

		anime({
			targets: this.DOM.img,
			duration: 1000,
			easing: 'easeOutElastic',
			scale: 1
		});

		/*anime({
			targets: [this.DOM.columns.left, this.DOM.columns.right],
			duration: 500,
			easing: 'easeOutExpo',
			translateX: 0
		});*/
	};

	window.FolioFx = FolioFx;	

})(window);