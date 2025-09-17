<?php snippet('header') ?>

  <?php snippet('sidebar') ?>
  <div class="page-container">
    <header class="header">
      <h1><?= $page->title()->html() ?></h1>
    </header>

    <main class="main-content two-columns">

    <div class="text-column scroll">
    <?php if ($page->intro()->isNotEmpty()): ?>
      <div class="menu-intro">
        <?= $page->intro()->kirbytext() ?>
      </div>
    <?php endif ?>
  <h2>Getränke</h2>
  <ul class="menu-list">
    <?php foreach ($page->drinks()->toStructure() as $drink): ?>
      <li>
        <strong><?= $drink->name() ?></strong> – <?= $drink->price() ?><br>
        <small><?= $drink->description() ?></small>
      </li>
    <?php endforeach ?>
  </ul>

  <h2>Speisen</h2>
  <ul class="menu-list">
    <?php foreach ($page->food()->toStructure() as $food): ?>
      <li>  
        <strong><?= $food->name() ?></strong> – <?= $food->price() ?><br>
        <small><?= $food->description() ?></small>
      </li>
    <?php endforeach ?>
  </ul>
</div>

      <div class="image-column scroll">
        <?php foreach ($page->children()->listed() as $section): ?>
          <?php foreach ($section->images() as $image): ?>
            <img src="<?= $image->url() ?>" id="<?= $image->name() ?>" alt="<?= $image->alt()->or($image->filename()) ?>">
          <?php endforeach ?>
        <?php endforeach ?>
      </div>

    </main>

    <?php snippet('footer') ?>
  </div>
</body>
</html>

