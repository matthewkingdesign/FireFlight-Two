<?php snippet('header-dark') ?>
  <div id="left-content-<?= $page->id() ?>" class="content">
    <div id="left-<?= $page->id() ?>" class="terms-content-left">

      <div class="terms-content">
        <h1 id="planning-title" class="terms-content-title"><?= $page->planning() ?></h1>
        <div id="planning-copy" class="terms-content-copy"><?= $page->planningText()->kt()?></div>
        <h1 id="weather-title" class="terms-content-title"><?= $page->weather() ?></h1>
        <div id="weather-copy" class="terms-content-copy"><?= $page->weatherText()->kt()?></div>
        <h1 id="travel-title" class="terms-content-title"><?= $page->travel() ?></h1>
        <div id="travel-copy" class="terms-content-copy"><?= $page->travelText()->kt()?></div>
        <h1 id="airspace-title" class="terms-content-title"><?= $page->airspace() ?></h1>
        <div id="airspace-copy" class="terms-content-copy"><?= $page->airspaceText()->kt()?></div>
        <h1 id="imageRights-title" class="terms-content-title"><?= $page->imageRights() ?></h1>
        <div id="imageRights-copy" class="terms-content-copy"><?= $page->imageRightsText()->kt()?></div>
        <h1 id="guidance-title" class="terms-content-title"><?= $page->guidance() ?></h1>
        <div id="guidance-copy" class="terms-content-copy"><?= $page->guidanceText()->kt()?></div>
        <h1 id="payment-title" class="terms-content-title"><?= $page->payment() ?></h1>
        <div id="payment-copy" class="terms-content-copy"><?= $page->paymentText()->kt()?></div>
      </div>
      <p class="terms-scroll">SCROLL FOR MORE</p>  
    </div>

    <div id="right-<?= $page->id() ?>" class="content-right"></div>

    <div id="right-content-container-<?= $page->id() ?>" class="content-right-container">
      <h1 class="content-title"><?= $page->heading() ?></h1>
      <div class="content-copy"><?= $page->text()->kt()?></div>
      <div class="content-prices"><?= $page->prices()->kt() ?></div>
      <h1 class="content-cta">Get in touch</h1>
      <div class="content-email"><?= $page->email()->kt() ?></div>
      <div class="content-phone"><?= $page->phone()->kt() ?></div>
    </div>
  </div>



<?php snippet('footer') ?>
