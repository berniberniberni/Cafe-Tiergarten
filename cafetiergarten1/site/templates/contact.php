
<?php snippet('header') ?>

<body>
  <?php snippet('sidebar') ?>

  <div class="page-container">
    <header class="header">
      <h1><?= $page->title() ?></h1>
      <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
    </header>

    <?php
    $bg = $page->image('1_kringel.png') ?? $page->image();
    ?>

    <main class="main-contact" style="--bg:url('<?= $bg?->url() ?>')">
      <div class="contact-card">
        <?= $page->text()->kirbytext() ?>
        <form
          action="https://buttondown.com/api/emails/embed-subscribe/cafetiergarten"
          method="post"
          target="popupwindow"
          onsubmit="window.open('https://buttondown.com/cafetiergarten', 'popupwindow')"
          class="embeddable-buttondown-form"
        >
          <label for="bd-email">Newsletter abonnieren</label>
          <input type="email" name="email" id="bd-email" placeholder="E-Mail-Adresse" required />
          <input type="submit" value="Subscribe" />
        </form>
      </div>
    </main>

    <!-- Mobile: Clean layout with small decorative images -->
    <main class="main-content mobile-contact">
      <div class="mobile-contact-content">
        
        <!-- Mobile decorative image 1 -->
        <div class="mobile-decorative-image mobile-decorative-top">
          <img src="<?= url('assets/images/mobil_blume.png') ?>" alt="Decorative flower" class="mobile-flower">
        </div>
        
        <div class="contact-text-content">
          <?= $page->text()->kirbytext() ?>
        </div>
        
        <div class="mobile-newsletter-form">
          <form
            action="https://buttondown.com/api/emails/embed-subscribe/cafetiergarten"
            method="post"
            target="popupwindow"
            onsubmit="window.open('https://buttondown.com/cafetiergarten', 'popupwindow')"
            class="embeddable-buttondown-form mobile-form"
          >
            <label for="bd-email-mobile">Newsletter abonnieren</label>
            <input type="email" name="email" id="bd-email-mobile" placeholder="E-Mail-Adresse" required />
            <input type="submit" value="Subscribe" />
          </form>
        </div>
        
        <!-- Mobile decorative image 2 -->
        <div class="mobile-decorative-image mobile-decorative-bottom">
          <img src="<?= url('assets/images/mobil_blume2.png') ?>" alt="Decorative flower" class="mobile-flower">
        </div>
        
      </div>
    </main>
      <?php snippet('footer') ?>
  </div>
</body>
</html>