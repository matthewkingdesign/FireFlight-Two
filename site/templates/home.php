<?php snippet('header-home') ?>
<div class="content-home">
  <div class="vimeo-wrapper">
     <iframe src="https://player.vimeo.com/video/443077884?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1"
             frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
    <?php
      $images =  $page->menuicon()->toFiles();
      foreach($images as $image): ?>
      <img class="logo-home" src="<?= $image->url() ?>" alt="">
    <?php endforeach ?>
    <h1 class="content-copy-home"><?= $page->text()->kt() ?></h1>
<?php snippet('footer') ?>
