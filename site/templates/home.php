<?php snippet('header-home') ?>
<div class="content-home">
    <?php
      $images =  $page->menuicon()->toFiles();
      foreach($images as $image): ?>
      <img class="logo-home" src="<?= $image->url() ?>" alt="">
    <?php endforeach ?>
    <h1 class="content-copy-home"><?= $page->text()->kt() ?></h1>
<?php snippet('footer') ?>
