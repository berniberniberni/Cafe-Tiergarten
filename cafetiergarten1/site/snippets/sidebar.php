<aside class="sidebar">
  <div class="top">
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
  </div>
  <div class="search">
    <a href="<?= url('search') ?>">Suche ...</a>
  </div>
</aside>
