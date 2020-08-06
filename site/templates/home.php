<?php snippet('header-home') ?>
<div class="content-home">
  <!-- FULLSCREEN VIDEO LOADED FROM VIMEO -->
  <!-- <div class="vimeo-wrapper">
    <iframe src="https://player.vimeo.com/video/444547127?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1"
             frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
    </iframe>
  </div> -->
<!-- LOGO AND SUB HEADER CALLING LOGO SPECIFICALLY WITH IF STATEMENT  -->
  <div class="content-home-holder">
    <?php if($image = $page->image('logo-light.svg')): ?>
      <img class="logo-home" src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <h1 class="content-copy-home"><?= $page->text()->kt() ?></h1>
  </div>
<!-- FULLSCREEN MENU -->
<div class="homepage-fullscreen-menu">
  <nav class="homepage-menu">
    <!--LOGO -->
    <?php if($image = $page->image('logo-dark.svg')): ?>
      <img class="logo-fullscreen-menu" src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <div class="homepage-menu-item-holder">
      <!--MENU IMAGES AND LINKS -->
      <?php foreach($site->children()->listed() as $subpage): ?>
        <a class="homepage-menu-link"  href="<?= $subpage->url() ?>">
          <span class="homepage-menu-item"><?= $subpage->title() ?></span>
          <?php
          $images =  $subpage->menuicon()->toFiles();
          foreach($images as $image): ?>
            <img class="homepage-menu-icon" src="<?= $image->url() ?>" alt="">
          <?php endforeach ?>
        </a>

      <?php endforeach ?>
    </div>
  </nav>
</div>
<?php snippet('footer') ?>
