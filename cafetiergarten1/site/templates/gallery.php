
<?php snippet('header') ?>

<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1><?= $page->title() ?></h1>
      <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
    </header>

    <?php
    $bg = $page->image('1_grundriss.png') ?? $page->image();
    ?>

    <main class="main-gallery" style="--bg:url('<?= $bg?->url() ?>')">
      
    </main>
      <?php snippet('footer') ?>
  </div>
</body>
</html>