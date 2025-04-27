<?php snippet('header') ?>

<div class="page-layout">
  
  <aside class="sidebar">
    <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>
    <nav class="menu">
      <ul>
        <?php foreach ($site->children()->listed() as $item): ?>
          <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
        <?php endforeach ?>
      </ul>
    </nav>
  </aside>

  <div class="main-and-footer">
    <main class="main-content">
      <section class="subpage">
        <h1><?= $page->title() ?></h1>
        <div class="text">
          <?= $page->text()->kirbytext() ?>
        </div>
      </section>
    </main>

    <?php snippet('footer') ?>
  </div>

</div>
