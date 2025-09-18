<?php snippet('header') ?>
<body>
    <?php snippet('sidebar') ?>
    <div class="page-container">
        <header class="header">
            <h1><?= $page->title() ?></h1>
        </header>
        <main class="main-content imprint-centered">
            <div class="imprint-card">
                <div class="text">
                    <?= $page->text()->kirbytext() ?>
                </div>
            </div>
        </main>
        <?php snippet('footer') ?>
    </div>
</body>
Ye