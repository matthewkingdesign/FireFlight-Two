<?php snippet('header') ?>
<div class="content">
  <div id="left-<?= $page->id() ?>" class="content-left">

    <?php
      $images =  $page->gallery()->toFiles();
      foreach($images as $image): ?>
      <img class="<?= $image->orientation() ?>" src="<?= $image->url() ?>" alt="">
    <?php endforeach ?>

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
