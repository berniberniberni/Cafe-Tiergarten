<?php snippet('header') ?>

  <?php snippet('sidebar') ?>
  <div class="page-container">
    <header class="header">
      <h1><?= $page->title()->html() ?></h1>
    </header>

    <main class="main-content two-columns">

      <div class="text-column scroll">
        <?php foreach ($page->children()->listed() as $section): ?>
          <h2 class="section-title section-<?= $section->slug() ?>">
            <?= $section->title() ?>
          </h2>
          <?= $section->text()->kirbytext() ?>
        <?php endforeach ?>
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
<html class="<?= $page->template() ?>">