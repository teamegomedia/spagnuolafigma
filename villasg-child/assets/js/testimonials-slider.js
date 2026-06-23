(function(){
	if (typeof window === 'undefined') return;

	function ready(fn){
		if (document.readyState !== 'loading') fn();
		else document.addEventListener('DOMContentLoaded', fn);
	}

	function init(slider){
		var viewport = slider.querySelector('.vsg-testimonials__viewport');
		var track    = slider.querySelector('.vsg-testimonials__track');
		var slides   = Array.prototype.slice.call(slider.querySelectorAll('.vsg-testimonials__slide'));
		var controls = slider.querySelector('.vsg-testimonials__controls');
		var dotsWrap = slider.querySelector('.vsg-testimonials__dots');
		var prevBtn  = slider.querySelector('.vsg-testimonials__arrow--prev');
		var nextBtn  = slider.querySelector('.vsg-testimonials__arrow--next');

		if (!viewport || !track || slides.length === 0) return;

		// Number of slides fully visible per page (1 on mobile, 2 on desktop).
		function perPage(){
			var first = slides[0];
			var slideW = first.getBoundingClientRect().width;
			if (!slideW) return 1;
			return Math.max(1, Math.round(viewport.clientWidth / slideW));
		}

		function pageCount(){
			return Math.max(1, Math.ceil(slides.length / perPage()));
		}

		function currentPage(){
			var pageW = viewport.clientWidth;
			if (!pageW) return 0;
			return Math.round(viewport.scrollLeft / pageW);
		}

		// If everything fits, no slider chrome is needed.
		function fits(){
			return slides.length <= perPage();
		}

		function buildDots(){
			dotsWrap.innerHTML = '';
			var pages = pageCount();
			for (var i = 0; i < pages; i++){
				var dot = document.createElement('button');
				dot.type = 'button';
				dot.className = 'vsg-testimonials__dot';
				dot.setAttribute('aria-label', 'Vai al gruppo ' + (i + 1));
				(function(index){
					dot.addEventListener('click', function(){ goToPage(index); });
				})(i);
				dotsWrap.appendChild(dot);
			}
		}

		function goToPage(index){
			var pages = pageCount();
			index = Math.max(0, Math.min(index, pages - 1));
			viewport.scrollTo({ left: index * viewport.clientWidth, behavior: 'smooth' });
		}

		function updateUI(){
			if (fits()){
				slider.classList.add('is-static');
				controls.setAttribute('aria-hidden', 'true');
				return;
			}
			slider.classList.remove('is-static');
			controls.setAttribute('aria-hidden', 'false');

			var pages = pageCount();
			if (dotsWrap.children.length !== pages){
				buildDots();
			}
			var page = currentPage();
			var dots = dotsWrap.children;
			for (var i = 0; i < dots.length; i++){
				dots[i].classList.toggle('is-active', i === page);
			}
			prevBtn.disabled = page <= 0;
			nextBtn.disabled = page >= pages - 1;
		}

		prevBtn.addEventListener('click', function(){ goToPage(currentPage() - 1); });
		nextBtn.addEventListener('click', function(){ goToPage(currentPage() + 1); });

		var scrollRaf;
		viewport.addEventListener('scroll', function(){
			if (scrollRaf) window.cancelAnimationFrame(scrollRaf);
			scrollRaf = window.requestAnimationFrame(updateUI);
		}, { passive: true });

		var resizeTimer;
		window.addEventListener('resize', function(){
			window.clearTimeout(resizeTimer);
			resizeTimer = window.setTimeout(function(){
				buildDots();
				updateUI();
			}, 150);
		});

		buildDots();
		updateUI();
	}

	ready(function(){
		var sliders = Array.prototype.slice.call(
			document.querySelectorAll('[data-vsg-testimonials]')
		);
		sliders.forEach(init);
	});
})();
