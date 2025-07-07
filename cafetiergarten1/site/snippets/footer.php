<footer class="footer">
  <div class="footer-section footer-left">
    <p>Email: <a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a></p>
    <p>Phone: <a href="tel:<?= $site->phone() ?>"><?= $site->phone() ?></a></p>
    <p><a href="<?= $site->instagram() ?>" target="_blank" rel="noopener noreferrer">Instagram</a></p>
  </div>

  <div class="footer-section footer-center">
    <p><?= $site->title() ?></p>
    <p><?= $site->address() ?></p>
  </div>

  <div class="footer-section footer-right">
    <p><a href="<?= page('imprint')->url() ?>">Impressum</a></p>
  </div>
</footer>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.getElementById('hamburger');
  const sidebar = document.querySelector('.sidebar');

  if (hamburger && sidebar) {
    hamburger.addEventListener('click', function() {
      sidebar.classList.toggle('open');
    });
  }
});
</script> 

<!-- Nur auf der Home-Seite home.js laden -->
<?php if ($page->isHomePage()): ?>
  <?= js('assets/js/home.js') ?>
<?php endif ?>

<script src="<?= url('assets/js/status.js') ?>"></script>


</body>
</html>

