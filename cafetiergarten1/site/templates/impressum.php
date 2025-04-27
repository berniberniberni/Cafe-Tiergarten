<?php snippet('header') ?>

<main class="main-content">
    <section class="subpage">
        <h1><?= $page->title() ?></h1>
        <div class="text">
            <?= $page->text()->kirbytext() ?>
        </div>
    </section>
</main>

<?php snippet('footer') ?>
