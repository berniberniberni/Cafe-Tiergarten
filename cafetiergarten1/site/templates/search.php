
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suche | <?= $site->title() ?></title>
  <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
</head>
<body>
<?php snippet('header') ?>

<div class="hamburger" onclick="toggleSidebar()">
  <span></span>
  <span></span>
  <span></span>
</div>
<?php snippet('sidebar') ?>

<div class="page-container search-page">
  <header class="header">
    <h1>Suche</h1>
  </header>

  <?php $query = get('q'); ?>

  <main class="main-content main-search">
    <div class="search-card">
      <!-- Formular -->
      <form action="<?= url('search') ?>" method="get" role="search" class="search-form" aria-label="Seitensuche">
        <label for="q" class="visually-hidden">Suchbegriff</label>
        <input
          id="q"
          type="search"
          name="q"
          value="<?= esc($query ?? '', 'attr') ?>"
          placeholder="Suche ..."
          autofocus
        >
  <button type="submit" aria-label="Suchen"><span aria-hidden="true">→</span></button>
        <!-- clear button removed as requested -->
      </form>

      <!-- Status / Hinweise -->
      <p class="search-status" aria-live="polite">
        <?php
        if ($query === null) {
          echo 'Bitte gib einen Suchbegriff ein.';
        } elseif (strlen(trim($query)) < 2) {
          echo 'Bitte gib mindestens 2 Zeichen ein.';
        }
        ?>
      </p>

      <!-- Ergebnisse -->
      <?php
      if ($query !== null && strlen(trim($query)) >= 2) {
        // Only search top-level pages (main navigation)
        $results = $site->children()->listed()->filter(function($page) use ($query) {
          $title = '';
          $text = '';
          if (method_exists($page, 'title') && is_object($page->title()) && method_exists($page->title(), 'value')) {
            $title = $page->title()->value();
          } elseif (method_exists($page, 'title')) {
            $title = (string)$page->title();
          }
          if (method_exists($page, 'text') && is_object($page->text()) && method_exists($page->text(), 'value')) {
            $text = $page->text()->value();
          } elseif (method_exists($page, 'text')) {
            $text = (string)$page->text();
          }
          $found = stripos($title, $query) !== false || stripos($text, $query) !== false;
          // Also search in all listed children (subpages/sections)
          if (!$found) {
            foreach ($page->children()->listed() as $child) {
              // Concatenate all field values of the child
              $allFields = '';
              foreach ($child->content()->data() as $fieldValue) {
                $allFields .= ' ' . (is_string($fieldValue) ? $fieldValue : '');
              }
              if (stripos($allFields, $query) !== false) {
                $found = true;
                break;
              }
            }
          }
          return $found;
        });

        if ($results->isNotEmpty()): ?>
          <ul class="search-results" role="list">
            <?php foreach ($results as $result): ?>
              <li class="search-item">
                <a class="search-link" href="<?= $result->url() ?>">
                  <span class="search-title"><?= $result->title()->esc() ?></span>
                  <?php if ($result->text()->isNotEmpty()): ?>
                    <span class="search-excerpt">
                      <?= $result->text()->excerpt(140) ?>
                    </span>
                  <?php endif ?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        <?php else: ?>
          <p class="search-empty">Keine Ergebnisse gefunden für „<?= html($query) ?>“.</p>
        <?php endif;
      }
      ?>
    </div>
  </main>

  <?php snippet('footer') ?>
</div>

<script>
  function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('open');
  }
</script>
</body>
</html>