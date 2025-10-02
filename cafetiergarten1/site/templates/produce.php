<?php snippet('header') ?>

  <?php snippet('sidebar') ?>
  <div class="page-container">
    <header class="header">
      <h1><?= $page->title()->html() ?></h1>
    </header>

    <main class="main-content two-columns">

      <!-- Desktop: Traditional two-column layout -->
      <div class="text-column scroll desktop-layout">
        <?php foreach ($page->children()->listed() as $section): ?>
          <h2 class="section-title section-<?= $section->slug() ?>">
            <?= $section->title() ?>
          </h2>
          <?= $section->text()->kirbytext() ?>
        <?php endforeach ?>
      </div>

      <div class="image-column scroll desktop-layout">
        <?php foreach ($page->children()->listed() as $section): ?>
          <?php foreach ($section->images() as $image): ?>
            <img src="<?= $image->url() ?>" id="<?= $image->name() ?>" alt="<?= $image->alt()->or($image->filename()) ?>">
          <?php endforeach ?>
        <?php endforeach ?>
      </div>

      <!-- Mobile: Integrated layout with text and images mixed -->
      <div class="mobile-integrated-content">
        <?php 
        $sections = $page->children()->listed();
        $totalSections = $sections->count();
        $sectionIndex = 0;
        ?>
        <?php foreach ($sections as $section): ?>
          <?php $sectionIndex++; ?>
          
          <div class="mobile-section">
            <h2 class="section-title section-<?= $section->slug() ?>">
              <?= $section->title() ?>
            </h2>
            <?= $section->text()->kirbytext() ?>
            
            <!-- Insert images after every section or strategically -->
            <?php if ($section->images()->isNotEmpty()): ?>
              <div class="mobile-section-images">
                <?php foreach ($section->images() as $image): ?>
                  <img src="<?= $image->url() ?>" id="<?= $image->name() ?>" alt="<?= $image->alt()->or($image->filename()) ?>">
                <?php endforeach ?>
              </div>
            <?php endif ?>
          </div>
          
        <?php endforeach ?>
      </div>

    </main>

    <?php snippet('footer') ?>
  </div>
</body>
<html class="<?= $page->template() ?>">