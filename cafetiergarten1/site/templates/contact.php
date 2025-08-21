
<?php snippet('header') ?>

<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1><?= $page->title() ?></h1>
      <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
    </header>

    <?php
    $bg = $page->image('1_kringel.png') ?? $page->image();
    ?>

    <main class="main-contact" style="--bg:url('<?= $bg?->url() ?>')">
      <div class="contact-card">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </main>
      <?php snippet('footer') ?>
  </div>
</body>
</html>