<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->isHomePage() ? $site->title() : $page->title() . ' | ' . $site->title() ?></title>
  <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
</head>
<body>

<?php snippet('header') ?>

<body>
<div class="hamburger" onclick="toggleSidebar()">
  <span></span>
  <span></span>
  <span></span>
</div>
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

  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('open');
    }
  </script>
</body>
</html>