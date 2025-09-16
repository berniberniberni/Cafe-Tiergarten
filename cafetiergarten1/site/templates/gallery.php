
<?php snippet('header') ?>
<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1><?= $page->title() ?></h1>
      <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
    </header>

    <?php
    // Hintergrund holen: erst Panel-Feld, sonst Fallback auf 1_grundriss.png oder erstes Bild
    $bg = $page->bg()->toFile() ?? $page->image('1_grundriss.png') ?? $page->image();
    ?>
<?php foreach ($page->files()->template('painting') as $painting): ?>
  <?php
    $top    = $painting->top()->or('0');
    $left   = $painting->left()->or('0');
    $width  = $painting->vw()->or('20');    // <— hier
    $rotate = $painting->rotate()->or('0');
    $z      = $painting->z()->or('1');
  ?>
  <figure class="painting"
    style="top:<?= $top ?>%; left:<?= $left ?>%; width:<?= $width ?>vw; transform:rotate(<?= $rotate ?>deg); z-index:<?= $z ?>;">
    <img src="<?= $painting->url() ?>" srcset="<?= $painting->srcset() ?>"
         alt="<?= $painting->alt()->or($painting->filename()) ?>">
    <?php if ($painting->caption()->isNotEmpty()): ?>
      <figcaption><?= $painting->caption()->kti() ?></figcaption>
    <?php endif ?>
  </figure>
<?php endforeach ?>

    <?php snippet('footer') ?>
  </div>
</body>
</html>