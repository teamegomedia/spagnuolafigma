(function(){
	if (typeof window === 'undefined') return;

	function ready(fn){
		if (document.readyState !== 'loading') fn();
		else document.addEventListener('DOMContentLoaded', fn);
	}

	ready(function(){
		// Keep --vsg-header-h in sync with the real header height so the mobile
		// menu panel (position:fixed; top:var(--vsg-header-h)) attaches flush
		// under the header instead of relying on a hardcoded 88px fallback.
		(function(){
			var headerEl = document.querySelector('.vsg-site-header, header.wp-block-template-part, header');
			if (!headerEl) return;
			function setHeaderH(){
				document.documentElement.style.setProperty('--vsg-header-h', headerEl.offsetHeight + 'px');
			}
			setHeaderH();
			window.addEventListener('resize', setHeaderH);
			window.addEventListener('load', setHeaderH);
			if (window.ResizeObserver){
				try { new ResizeObserver(setHeaderH).observe(headerEl); } catch (e) {}
			}
		})();

		// All storia-dark bands on the page (the pattern can appear multiple times).
		var blocks = Array.prototype.slice.call(
			document.querySelectorAll('.vsg-storia-dark')
		);
		if (!blocks.length) return;

		// Final fallback stop: page footer (used by the LAST band).
		var fallbackStop = document.querySelector('.vsg-site-footer')
			|| document.querySelector('.wp-block-template-part footer')
			|| document.querySelector('footer');

		// Build one entry per band. Each band's stop is the NEXT band's PILL
		// (so hand-off happens as soon as both pills would appear on screen
		// simultaneously), and the last band falls back to the page footer.
		// stopMode controls when end-sticky triggers:
		//  - 'enter'  → when the stop element enters the viewport from the bottom
		//              (used for the next band's pill, to avoid two pills on
		//              screen at the same time).
		//  - 'reach'  → when the stop element reaches the bottom edge of the
		//              sticky pill near the top (used for the footer, so the
		//              sticky stays visible until the actual end of the page).
		var entries = blocks.map(function(block, i){
			var pill = block.querySelector('.vsg-storia-pill');
			if (!pill) return null;
			pill.classList.add('vsg-storia-pill--js');
			var stopEl = null;
			var stopMode = 'reach';
			if (i + 1 < blocks.length){
				stopEl = blocks[i + 1].querySelector('.vsg-storia-pill') || blocks[i + 1];
				stopMode = 'enter';
			} else {
				stopEl = fallbackStop;
				stopMode = 'reach';
			}
			return { block: block, pill: pill, stopEl: stopEl, stopMode: stopMode };
		}).filter(Boolean);
		if (!entries.length) return;

		// Disable below 1024px (mobile/tablet)
		var mq = window.matchMedia('(min-width: 1024px)');
		var ticking = false;

		function getHeaderHeight(){
			var header = document.querySelector('.vsg-site-header, .wp-block-template-part header, header.wp-block-template-part, header');
			return header ? header.offsetHeight : 0;
		}

		function clearPill(pill){
			pill.classList.remove('is-sticky','is-stopped');
			pill.style.top = '';
			pill.style.right = '';
		}

		function update(){
			ticking = false;
			if (!mq.matches){
				entries.forEach(function(e){ clearPill(e.pill); });
				return;
			}
			var headerH = getHeaderHeight();
			var offsetTop = headerH + 24; // distance from viewport top when stuck (below header)
			var viewportH = window.innerHeight || document.documentElement.clientHeight;
			var viewportW = document.documentElement.clientWidth || window.innerWidth;

			entries.forEach(function(e){
				var rect = e.block.getBoundingClientRect();
				var stopRect = e.stopEl ? e.stopEl.getBoundingClientRect() : null;
				var pillH = e.pill.offsetHeight;

				// Cache the pill's intrinsic vertical offset within its band
				// while the pill is still in flow. We use it to trigger sticky
				// exactly when the pill itself reaches the top offset (instead
				// of when the band's top does), so there is no vertical jump
				// at the in-flow → fixed transition.
				if (!e.pill.classList.contains('is-sticky')){
					var pillRect = e.pill.getBoundingClientRect();
					e.pillTopOffsetInBlock = pillRect.top - rect.top;
				}
				var pillOffset = e.pillTopOffsetInBlock || 0;

				// Start sticking once the pill itself reaches the top offset.
				var startSticky = (rect.top + pillOffset) <= offsetTop;
				// End sticky depends on the stop mode (see entries build).
				var endSticky = false;
				if (stopRect){
					if (e.stopMode === 'enter'){
						// Hand-off to the next band: hide as soon as its pill
						// starts to appear at the bottom of the viewport, so
						// the two pills are never visible simultaneously.
						endSticky = stopRect.top <= viewportH;
					} else {
						// End of page: hide only when the footer reaches the
						// bottom edge of the sticky pill near the top.
						endSticky = stopRect.top <= offsetTop + pillH + 16;
					}
				}

				if (startSticky && !endSticky){
					e.pill.classList.add('is-sticky');
					e.pill.classList.remove('is-stopped');
					e.pill.style.top = offsetTop + 'px';
					// Align horizontally with the in-flow position: measure the
					// right edge of the band's __row container so the sticky pill
					// stays on the same vertical column as when it was in flow.
					var row = e.block.querySelector('.vsg-storia-dark__row');
					if (row){
						var rowRect = row.getBoundingClientRect();
						e.pill.style.right = Math.max(0, viewportW - rowRect.right) + 'px';
					}
				} else if (endSticky){
					e.pill.classList.remove('is-sticky');
					e.pill.classList.add('is-stopped');
					e.pill.style.top = '';
					e.pill.style.right = '';
				} else {
					clearPill(e.pill);
				}
			});
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
