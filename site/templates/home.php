<?php snippet('header') ?>
<div class="content-home">

  <div class="loading-screen">
    <div class="loading-screen-content">
      <?php if($image = $page->image('logo-light.svg')): ?>
        <img class="logo-home-loading-screen" src="<?= $image->url() ?>" alt="">
      <?php endif ?>
      <span id="homepage-subtitle-loading-screen"><?= $page->heading() ?></span>
    </div>
  </div>
  <!-- FULLSCREEN VIDEO LOADED FROM VIMEO -->
  <div class="vimeo-wrapper">
    <iframe src="https://player.vimeo.com/video/444547127?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1"
             frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
    </iframe>
  </div>
</div>

<div id="right-content-container-<?= $page->id() ?>" class="content-right-container">
  <div id="content-copy-<?= $page->id() ?>" class="content-copy"><?= $page->text()->kt()?></div>
  <div class="content-prices"><?= $page->prices()->kt() ?></div>
  <div class="content-email"><?= $page->email()->kt() ?></div>
  <div class="content-phone"><?= $page->phone()->kt() ?></div>
</div>
</div>

<?php snippet('footer') ?>
