<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php echo $page->metaTags() ?>
    <title><?= $page->title() ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/ogl6oma.css">
    <link rel="stylesheet/less" type="text/css" href="assets/css/stylesheet.less" />
  </head>
      <!-- ADDED BARBA DATA WRAPPER HERE -->
  <body data-barba="wrapper">

    <!-- ADDED THIS FROM BARBA EXAMPLE -->
    <div class="loading-container">
      <div class="loading-screen-fade">
      </div>
    </div>

    <div id="container-<?= $page->id() ?>" class="container" data-barba="container" data-barba-namespace="<?= $page->id() ?>">

      <div id="menu-bg-<?= $page->id() ?>" class="menu-bg"></div>
      <nav class="menu">
        <div class="homepage-links">
          <?php
            $homePage = $site->findPageOrDraft('home');
              if($image = $homePage->image('f-icon-light.svg')): ?>
              <a class="homepage-icon-link" href="<?= $homePage->url() ?>"> <img id="f-icon-home" class="homepage-icon" src="<?= $image->url() ?>" alt=""></a>
          <?php endif ?>
          <?php
            if($image = $homePage->image('logo-text-light.svg')): ?>
            <a href="<?= $homePage->url() ?>"> <img id="logo-text" class="homepage-icon" src="<?= $image->url() ?>" alt=""></a>
          <?php endif ?>
        </div>
        <div class="menu-item-holder">
          <?php foreach($site->children()->listed() as $subpage): ?>
            <a class="menu-link" href="<?= $subpage->url() ?>">
              <?php
                $images =  $subpage->menuiconlight()->toFiles();
                foreach($images as $image): ?>
                  <img class="menu-icon" src="<?= $image->url() ?>" alt="">
              <?php endforeach ?>
              <span class="menu-item"><?= $subpage->title()->upper() ?></span>
            </a>
          <?php endforeach ?>
        </div>

        <div class="socials">
          <?php
          $contactPage = $site->findPageOrDraft('contact');
            if($image = $contactPage->image('facebook-fill-light.svg')): ?>
            <a href="<?= $contactPage->facebookUrl() ?>"> <img class="social-media-icon" src="<?= $image->url() ?>" alt=""></a>
          <?php endif ?>
          <?php
            if($image = $contactPage->image('insta-fill-light.svg')): ?>
            <a href="<?= $contactPage->instaUrl() ?>"> <img class="social-media-icon" src="<?= $image->url() ?>" alt=""></a>
          <?php endif ?>

        </div>
        <div class="close-btn">
          <?php
            $homePage = $site->findPageOrDraft('home');
              if($image = $homePage->image('close-menu.svg')): ?>
               <img id="" class="" src="<?= $image->url() ?>" alt="">
          <?php endif ?>

        </div>


        
      </nav>


      <div class="open-btn">
          <?php
            $homePage = $site->findPageOrDraft('home');
              if($image = $homePage->image('open-menu.svg')): ?>
               <img id="" class="" src="<?= $image->url() ?>" alt="">
          <?php endif ?>

        </div>

      

      
      