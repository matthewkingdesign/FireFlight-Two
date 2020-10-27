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
  <div id="vimeo-home" class="vimeo-wrapper">
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
<div id='waypoint-1'></div>
  <div id="content-<?= $page->id() ?>">
      <div id="left-<?= $page->id() ?>">
        <h1 id="content-title-<?= $page->id() ?>" class="content-title"><?= $page->title() ?></h1>
        <!-- <div class="content-copy"><?= $page->text()->kt()?></div>
        <div class="content-prices"><?= $page->prices()->kt() ?></div>
        <h1 class="content-cta">Get in touch</h1>
        <div class="content-email"><?= $page->email()->kt() ?></div>
        <div class="content-phone"><?= $page->phone()->kt() ?></div> -->

        <div class="showreel-vimeo-wrapper">
          <iframe src="https://player.vimeo.com/video/472574172" width="800" height="450" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
        <h1 id="showreel-subtitle" class="content-title">Stills</h1>
        <div class = "showreel-stills-home-holder">
          <ul class="showreel-flex"  >
            <?php
              $children = $page->children()->listed();
              foreach ($children as $child): ?>
              <?php $images = $child->images(); ?>
                <?php if ($images->isNotEmpty()): ?>
                  <?php foreach ($images as $image) : ?>
                  <li>
                    <a class="gallery2" href=" <?= $image->url() ?>" >
                      <img class="showreel-flex-image" src="<?= $image->url() ?>" alt="" >
                    </a>
                  </li>               
                <?php endforeach ?>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </div>  
    <div class="phone">
      <!--ABOUT PAGE-->
      <div class="phone-element" id="phone-about">
        <?php
          $aboutPage = $site->findPageOrDraft('about'); ?>
          <h1 class="phone-content-title"><?= $aboutPage->title() ?></h1>
          <div class="content-copy"><?= $aboutPage->text()->kt()?></div>
            <?php if($image = $aboutPage->image('beach_result.jpg')): ?>
            <img id="phone-about-img" class="phone-img" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
      </div>
      
      <!--INSPECTION PAGE-->
      <div class="phone-element" id="phone-inspection">
        <?php
          $inspectionPage = $site->findPageOrDraft('inspection'); ?>
          <h1 class="phone-content-title"><?= $inspectionPage->title() ?></h1>
          <div class="content-copy"><?= $inspectionPage->text()->kt()?></div>
          <?php  if($image = $inspectionPage->image('mike-roof-2_result-edit.jpg')): ?>
            <img id="phone-inspection-img" class="phone-img" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
      </div>
      
      <!--PROPERTIES PAGE-->
      <div class="phone-element" id="phone-properties">
        <?php
          $propertiesPage = $site->findPageOrDraft('properties'); ?>
          <h1 class="phone-content-title"><?= $propertiesPage->title() ?></h1>
          <div class="content-copy"><?= $propertiesPage->text()->kt()?></div>
          <?php if($image = $propertiesPage->image('estate-agents-new.jpg')): ?>
            <img id="phone-properties-img" class="phone-img" src="<?= $image->url() ?>" alt="">
        <?php endif ?>

      </div>
     
       <!--WEDDINGS PAGE-->
       <div class="phone-element" id="phone-weddings">
        <?php
          $weddingsPage = $site->findPageOrDraft('weddings'); ?>
          <h1 class="phone-content-title"><?= $weddingsPage->title() ?></h1>
          <div class="content-copy"><?= $weddingsPage->text()->kt()?></div>
          <?php  if($image = $weddingsPage->image('ripples_result.jpg')): ?>
            <img id="phone-weddings-img" class="phone-img" src="<?= $image->url() ?>" alt="">
        <?php endif ?>

      </div>

      <!--HIRE PAGE-->
      <div class="phone-element" id="phone-hire">
        <?php
          $hirePage = $site->findPageOrDraft('bespoke');
            if($image = $hirePage->image('bespoke-web-image_result.jpg')): ?>
            <h1 class="phone-content-title"><?= $hirePage->title() ?></h1>
            <div class="content-copy"><?= $hirePage->text()->kt()?></div>
            <img id="phone-hire-img" class="phone-img" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        
      </div>
      <div class="phone-contact-home">
        <div class="phone-number-home">+44 7735 886211</div>
        <a href = "mailto: support@fireflightdrones.com"><div class="phone-email-home">support@fireflightdrones.com</div></a>
      </div>
    </div>
<?php snippet('footer-home') ?>
