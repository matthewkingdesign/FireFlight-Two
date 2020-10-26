<?php snippet('header-home') ?>
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
<div id="content-<?= $page->id() ?>" class="content">
    <div id="left-<?= $page->id() ?>" class="content-left">

      <h1 id="content-title-<?= $page->id() ?>" class="content-title"><?= $page->title() ?></h1>
      <!-- <div class="content-copy"><?= $page->text()->kt()?></div>
      <div class="content-prices"><?= $page->prices()->kt() ?></div>
      <h1 class="content-cta">Get in touch</h1>
      <div class="content-email"><?= $page->email()->kt() ?></div>
      <div class="content-phone"><?= $page->phone()->kt() ?></div> -->

      <div class="showreel-vimeo-wrapper">
        <iframe src="https://player.vimeo.com/video/448823024" width="800" height="450" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
      <h1 id="showreel-subtitle" class="content-title">Stills</h1>
      
      <ul class="showreel-flex"  >
        <?php
          $children = $page->children()->listed();
          foreach ($children as $child): ?>
          <?php $images = $child->images(); ?>
          <?php if ($images->isNotEmpty()): ?>

                  
                      <?php foreach ($images as $image) : ?>
                      <li>
                        <a class="gallery1" href=" <?= $image->url() ?>" >
                          <img class="showreel-flex-image" src="<?= $image->url() ?>" alt="" >
                        </a>
                      </li>               
                    <?php endforeach ?>
                  

          <?php endif ?>
        <?php endforeach ?>
      </ul>
    </div>
  </div>  
<?php snippet('footer') ?>
