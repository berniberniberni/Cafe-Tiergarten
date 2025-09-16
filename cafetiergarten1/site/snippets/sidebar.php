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
    <form action="<?= url('search') ?>" method="get" class="sidebar-search-form" role="search" aria-label="Seitensuche">
      <input
        type="search"
        name="q"
        placeholder="Suche ..."
        value="<?= esc(get('q') ?? '', 'attr') ?>"
        class="sidebar-search-input"
        autocomplete="off"
      >
      <button type="submit" class="sidebar-search-button">Suchen</button>
    </form>
  </div>
</aside>
