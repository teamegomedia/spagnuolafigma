/**
 * Links to a Koalendar booking page (koalendar.com/e/…) open the Koalendar popup
 * instead of leaving the site. The page must load https://koalendar.com/assets/widget.js;
 * without it the link simply opens the booking page in a new tab.
 */
document.addEventListener('click', function (e) {
  var link = e.target.closest('a[href*="koalendar.com/e/"]');
  if (!link || typeof window.Koalendar !== 'function') return;
  e.preventDefault();
  window.Koalendar('open', { url: link.href });
});
