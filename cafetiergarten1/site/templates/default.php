<!DOCTYPE html>
<html lang="de">
<head>
  <?php snippet('header') ?>
</head>


<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1><?= $page->title()->html() ?></h1>
    </header>

    <main class="main-content">
      <?= $page->text()->kirbytext() ?>
    </main>

    <?php snippet('footer') ?>
  </div>
</body>
</html>