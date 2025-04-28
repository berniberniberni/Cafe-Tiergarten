<?php snippet('header') ?>

<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1><?= $page->title() ?></h1>
    </header>

    <main class="main-content">
      <div class="table-area" id="table-area">
        <img src="<?= url('assets/images/Hering.png') ?>" class="draggable" alt="Hering" draggable="true">
        <img src="<?= url('assets/images/Besteck.png') ?>" class="draggable" alt="Besteck" draggable="true">
        <img src="<?= url('assets/images/brot.png') ?>" class="draggable" alt="Brotkorb" draggable="true">
      </div>
    </main>

    <?php snippet('footer') ?>
  </div>

  <!-- Nur auf der Home-Seite laden -->
  <?php if ($page->isHomePage()): ?>
    <script src="<?= url('assets/js/home.js') ?>"></script>
  <?php endif ?>
</body>
</html>