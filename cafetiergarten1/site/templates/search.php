<?php snippet('header') ?>

<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1>Suche</h1>
    </header>

    <main class="main-content">
      <?php
      // Suchbegriff (GET-Parameter ?q=…)
      $query = get('q');

      // Formular (bleibt immer sichtbar)
      ?>
      <form action="<?= url('search') ?>" method="get" role="search" class="search-form">
        <input
          type="search"
          name="q"
          value="<?= esc($query ?? '', 'attr') ?>"
          placeholder="Suchbegriff eingeben"
          autofocus
        >
        <button type="submit">Suchen</button>
      </form>

      <?php
      // Nur suchen, wenn etwas eingegeben wurde (ab 2 Zeichen)
      if ($query !== null && strlen(trim($query)) >= 2) {
        // Alle gelisteten Seiten durchsuchen (Suche nach title + text)
        // Tipp: 'search' Seite selbst ausschließen
        $results = site()
          ->index()
          ->listed()
          ->not('search')
          ->search($query, 'title|text');

        if ($results->isNotEmpty()):
      ?>
          <ul class="search-results">
            <?php foreach ($results as $result): ?>
              <li>
                <a href="<?= $result->url() ?>">
                  <?= $result->title()->esc() ?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
      <?php else: ?>
          <p>Keine Ergebnisse gefunden für „<?= html($query) ?>“.</p>
      <?php
        endif;
      } elseif ($query !== null) {
        echo '<p>Bitte gib mindestens 2 Zeichen ein.</p>';
      } else {
        echo '<p>Bitte gib einen Suchbegriff ein.</p>';
      }
      ?>
    </main>

    <?php snippet('footer') ?>
  </div>
</body>
</html>
