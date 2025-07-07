<aside class="sidebar">
  <!--<div class="logo">
  <a href=" <?= url() ?>"><?= $site->title() ?> </a> 
  </div>-->

  <!--
  <div class="sidebar-logo">
  <a href="<?= url() ?>">
    <img src="<?= url('assets/images/logo.svg') ?>" alt="Café Tiergarten Logo">
  </a>
</div> -->

<div class="sidebar-title">
  <a href="<?= url() ?>"><?= $site->title() ?></a>
</div>

  <nav class="menu">
    <ul>
      <?php foreach ($site->children()->listed() as $item): ?>
        <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  </nav>
  <div class="search">
  <a href="<?= url('search') ?>">Suche ...</a>
</div>
</aside>
