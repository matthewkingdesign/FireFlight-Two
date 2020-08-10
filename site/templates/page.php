<?php snippet('header') ?>
<div class="content">
  <div id="left-<?= $page->id() ?>" class="content-left">

    <?php
      $images =  $page->gallery()->toFiles();
      foreach($images as $image): ?>
      <img class="<?= $image->orientation() ?>" src="<?= $image->url() ?>" alt="">
    <?php endforeach ?>

  </div>
  <div id="right-<?= $page->id() ?>" class="content-right">
    <div class="content-right-container">
      <h1 class="content-title"><?= $page->title() ?></h1>
      <p class="content-copy"><?= $page->text()?></p>
      <p class="content-prices"><?= $page->prices() ?></p>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
