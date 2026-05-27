(function(){
	if (typeof window === 'undefined') return;

	function ready(fn){
		if (document.readyState !== 'loading') fn();
		else document.addEventListener('DOMContentLoaded', fn);
	}

	ready(function(){
		// Only first storia-dark (not the cta-finale variant)
		var storia = document.querySelector('.vsg-storia-dark:not(.vsg-cta-finale)');
		if (!storia) return;

		var pill = storia.querySelector('.vsg-storia-pill');
		if (!pill) return;

		// Disable below 1024px (mobile/tablet)
		var mq = window.matchMedia('(min-width: 1024px)');
		var ticking = false;
		var stopEl = document.querySelector('.vsg-cta-finale')
			|| document.querySelector('.vsg-site-footer')
			|| document.querySelector('.wp-block-template-part footer');

		// Mark element so CSS can position it
		pill.classList.add('vsg-storia-pill--js');

		function update(){
			ticking = false;
			if (!mq.matches){
				pill.classList.remove('is-sticky','is-stopped');
				return;
			}
			var rect = storia.getBoundingClientRect();
			var pillH = pill.offsetHeight;
			var offsetTop = 24; // distance from viewport top when stuck
			var stopRect = stopEl ? stopEl.getBoundingClientRect() : null;

			// Start sticking once the storia section has scrolled past top
			var startSticky = rect.top <= offsetTop;
			// Stop sticking when bottom of stopEl-top is above pill bottom
			var endSticky = stopRect ? (stopRect.top <= offsetTop + pillH + 16) : false;

			if (startSticky && !endSticky){
				pill.classList.add('is-sticky');
				pill.classList.remove('is-stopped');
				pill.style.top = offsetTop + 'px';
			} else if (endSticky){
				pill.classList.remove('is-sticky');
				pill.classList.add('is-stopped');
				pill.style.top = '';
			} else {
				pill.classList.remove('is-sticky','is-stopped');
				pill.style.top = '';
			}
		}

		function onScroll(){
			if (!ticking){
				window.requestAnimationFrame(update);
				ticking = true;
			}
		}

		window.addEventListener('scroll', onScroll, { passive: true });
		window.addEventListener('resize', onScroll);
		mq.addEventListener ? mq.addEventListener('change', onScroll) : mq.addListener(onScroll);
		update();
	});
})();
