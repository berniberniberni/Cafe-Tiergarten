<?php snippet('header') ?>

<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1>Suche</h1>
    </header>

    <main class="main-content">
      <?php
      $query = get('q');
      $results = $site->index()->filter(function ($page) use ($query) {
        return str::contains(str::lower($page->title()), str::lower($query)) ||
               str::contains(str::lower($page->text()), str::lower($query));
      });
      ?>

      <?php if ($query && $results->isNotEmpty()): ?>
        <ul>
          <?php foreach ($results as $result): ?>
            <li><a href="<?= $result->url() ?>"><?= $result->title()->html() ?></a></li>
          <?php endforeach ?>
        </ul>
      <?php elseif ($query): ?>
        <p>Keine Ergebnisse gefunden für „<?= html($query) ?>“.</p>
      <?php else: ?>
        <p>Bitte gib einen Suchbegriff ein.</p>
      <?php endif ?>
    </main>

    <?php snippet('footer') ?>
  </div>
</body>
</html>