<aside class="sidebar">
  <div class="sidebar-top">
    <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

    <nav class="menu">
      <ul>
        <?php foreach ($site->children()->listed() as $item): ?>
          <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
        <?php endforeach ?>
      </ul>
    </nav>
  </div>

  <div class="sidebar-bottom">
    <div class="search">
      <p>search ....</p>
    </div>
  </div>
</aside>