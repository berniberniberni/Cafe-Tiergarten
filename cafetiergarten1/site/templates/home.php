<?php snippet('header') ?>

<body>
  <?php snippet('sidebar') ?>

 <div class="page-container">
    <header class="header">
      <h1><?= $page->title() ?></h1>
      <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
      <div class="status-message" id="statusMessage"></div>
    </header>

    <main class="main-content">
  
      <div class="table-area" id="table-area">
        <img src="<?= url('assets/images/colaundwein.png') ?>" class="draggable" alt="colaundwein" draggable="true">
        <img src="<?= url('assets/images/brot.png') ?>" class="draggable" alt="Brotkorb" draggable="true">
        <img src="<?= url('assets/images/kirsche.png') ?>" class="draggable" alt="Kirschmochi" draggable="true">
        <img src="<?= url('assets/images/silberschale.png') ?>" class="draggable" alt="silberschale" draggable="true">
        <img src="<?= url('assets/images/silberdose.png') ?>" class="draggable" alt="silberdose" draggable="true">
        <img src="<?= url('assets/images/oliven.png') ?>" class="draggable" alt="oliven" draggable="true">
        <img src="<?= url('assets/images/teigtaschen.png') ?>" class="draggable" alt="teigtaschen" draggable="true">
        <img src="<?= url('assets/images/Granita_Sahne.png') ?>" class="draggable" alt="Granita" draggable="true">
        <img src="<?= url('assets/images/lampe.png') ?>" class="draggable" alt="Lampe" draggable="true">
        <img src="<?= url('assets/images/GräflicheSpeise.png') ?>" class="draggable" alt="Bowl" draggable="true">
        <img src="<?= url('assets/images/radish_tomate_plum.png') ?>" class="draggable" alt="Radieschen" draggable="true">
        <img src="<?= url('assets/images/coffee.png') ?>" class="draggable" alt="coffee" draggable="true">
        <img src="<?= url('assets/images/citrus.png') ?>" class="draggable" alt="Zitronen" draggable="true">
        <img src="<?= url('assets/images/blumis.png') ?>" class="draggable" alt="Blumen" draggable="true">
      </div>

        <div id="drop-area">  </div> <!-- Drop Area -->
    </main>

    <?php snippet('footer') ?>
  </div>

  <!-- Nur auf der Home-Seite laden -->
  <?php if ($page->isHomePage()): ?>
    <script src="<?= url('assets/js/home.js') ?>"></script>
  <?php endif ?>
</body>
</html>