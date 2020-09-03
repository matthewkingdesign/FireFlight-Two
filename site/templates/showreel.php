<?php snippet('header-dark') ?>
  <div id="content-<?= $page->id() ?>" class="content">
    <div id="left-<?= $page->id() ?>" class="content-left">

      <h1 class="content-title"><?= $page->title() ?></h1>
      <div class="content-copy"><?= $page->text()->kt()?></div>
      <div class="content-prices"><?= $page->prices()->kt() ?></div>
      <h1 class="content-cta">Get in touch</h1>
      <div class="content-email"><?= $page->email()->kt() ?></div>
      <div class="content-phone"><?= $page->phone()->kt() ?></div>

      <div class="showreel-vimeo-wrapper">
        <iframe src="https://player.vimeo.com/video/448823024" width="800" height="450" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
      <h1 id="showreel-subtitle" class="content-title">Still</br> Photography</h1>



        <ul class="showreel-flex">
          <?php foreach($page->children() as $showreel): ?>
            <?php
              $images =  $showreel->gallery()->toFiles();
              foreach($images as $image): ?>
              <li>
                <img class="showreel-flex-image" src="<?= $image->url() ?>" alt="">
              </li>
            <?php endforeach ?>
          <?php endforeach ?>
        </ul>







    </div>

  </div>





<?php snippet('footer-showreel') ?>
