<?php snippet('header') ?>
<div class="content">
  <div class="content-left">

    <?php
      $images =  $page->gallery()->toFiles();
      foreach($images as $image): ?>
      <img src="<?= $image->url() ?>" alt="">
    <?php endforeach ?>

  </div>
  <div class="content-right">
    <h1 class="content-title"><?= $page->title() ?></h1>
    <p class="content-copy"><?= $page->text()->kt() ?></p>
    <p class="content-prices"><?= $page->prices() ?></p>
  </div>
</div>

<?php snippet('footer') ?>
