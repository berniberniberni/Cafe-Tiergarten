<?php snippet('header') ?>

<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1><?= $page->title() ?></h1>
    </header>

    <main class="main-content">
      <?= $page->text()->kirbytext() ?>
    </main>

    <?php snippet('footer') ?>
  </div>
</body>
</html>
