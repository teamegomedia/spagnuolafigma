/**
 * Contact lightbox: links to "#contatti" open #vsg-contact-dialog.
 * Closes on the × button, on Esc (native) and on a click outside the box.
 */
(function () {
  var dialog = document.getElementById('vsg-contact-dialog');
  if (!dialog || typeof dialog.showModal !== 'function') return;

  var opener = null;

  document.addEventListener('click', function (e) {
    var link = e.target.closest('a[href$="#contatti"], .vsg-open-contact a, a.vsg-open-contact');
    if (!link) return;
    e.preventDefault();
    opener = link;
    dialog.showModal();
    document.documentElement.classList.add('vsg-dialog-open');
  });

  dialog.addEventListener('click', function (e) {
    // Click on the backdrop: the event target is the <dialog> itself.
    if (e.target === dialog || e.target.closest('[data-vsg-contact-close]')) dialog.close();
  });

  dialog.addEventListener('close', function () {
    document.documentElement.classList.remove('vsg-dialog-open');
    if (opener) opener.focus();
  });
})();
