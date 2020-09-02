<?php snippet('header') ?>
  <div class="content">
    <div id="left-<?= $page->id() ?>" class="content-left">
      <div class="showreel-vimeo-wrapper">
    <iframe src="https://player.vimeo.com/video/448823024" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>


  <?php foreach ($page->children() as $showreel): ?>
        <?= $showreel->image()->crop(500, 700) ?>
  <?php endforeach  ?>


    </div>

    <div id="right-<?= $page->id() ?>" class="content-right"></div>

    <div id="right-content-container-<?= $page->id() ?>" class="content-right-container">
      <h1 class="content-title"><?= $page->title() ?></h1>
      <div class="content-copy"><?= $page->text()->kt()?></div>
      <div class="content-prices"><?= $page->prices()->kt() ?></div>
      <h1 class="content-cta">Get in touch</h1>
      <div class="content-email"><?= $page->email()->kt() ?></div>
      <div class="content-phone"><?= $page->phone()->kt() ?></div>
    </div>
  </div>



<?php snippet('footer') ?>
