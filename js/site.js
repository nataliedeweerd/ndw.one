/**
 * main.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2017, Codrops
 * http://www.codrops.com
 */
 
jQuery(function($) {
    var rellax__cloud = new Rellax('.parallax__cloud');
    var rellax__mountain1 = new Rellax('.parallax__mountain--1');
    var rellax__mountain2 = new Rellax('.parallax__mountain--2');
    var rellax__mountain3 = new Rellax('.parallax__mountain--3');
    var rellax__shrubs = new Rellax('.parallax__shrubs');
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