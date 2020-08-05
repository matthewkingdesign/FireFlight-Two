<?php snippet('header-home') ?>
<div class="content-home">
  <div class="vimeo-wrapper">
     <iframe src="https://player.vimeo.com/video/443077884?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1"
             frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
  <div class="content-home-holder">
    <?php
      $images =  $page->logo()->toFiles();
      foreach($images as $image): ?>
      <img class="logo-home" src="<?= $image->url() ?>" alt="">
    <?php endforeach ?>
    <h1 class="content-copy-home"><?= $page->text()->kt() ?></h1>
  </div>
<div class="homepage-fullscreen-meun">
  <nav class="homepage-menu">
    <div class="homepage-menu-item-holder">
      <?php foreach($site->children()->listed() as $subpage): ?>
        <a class="homepage-menu-item" href="<?= $subpage->url() ?>">
          <?= $subpage->title() ?>
        </a>
        <?php
          $images =  $subpage->menuicon()->toFiles();
          foreach($images as $image): ?>
            <a href="<?= $subpage->url() ?>"><img class="homepage-menu-icon" src="<?= $image->url() ?>" alt=""></a>
          <?php endforeach ?>
      <?php endforeach ?>
    </div>
  </nav>
</div>
<?php snippet('footer') ?>
