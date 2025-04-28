<?php snippet('header') ?>

<body>
  <div class="hamburger" onclick="toggleSidebar()">☰</div>

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