<?php snippet('header') ?>
<?php snippet('sidebar') ?>

<div class="page-container">
  <header class="header">
    <h1><?= $page->title() ?></h1>
  </header>

  <main class="main-content scroll menu">
    <div class="text-column">
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
  </main>

  <?php snippet('footer') ?>
</div>
