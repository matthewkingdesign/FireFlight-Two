<!-- FULLSCREEN MENU -->
<!-- <div class="homepage-fullscreen-menu">
  <nav class="homepage-menu"> -->
    <!--LOGO -->
    <!-- <?php if($image = $page->image('logo-light.svg')): ?>
      <img class="logo-fullscreen-menu" src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <span id="homepage-subtitle"><?= $page->heading() ?></span>
    <div class="homepage-menu-item-holder"> -->
      <!--MENU IMAGES AND LINKS -->
      <!-- <?php foreach($site->children()->listed() as $subpage): ?>
        <a class="homepage-menu-link"  href="<?= $subpage->url() ?>">
          <?php
          $images =  $subpage->menuiconlight()->toFiles();
          foreach($images as $image): ?>
            <img class="homepage-menu-icon" src="<?= $image->url() ?>" alt="">
          <?php endforeach ?>
          <span class="homepage-menu-item"><?= $subpage->title()->upper() ?></span>
        </a>

      <?php endforeach ?>
    </div> -->




    <div class="content-home">

      <!-- <div class="loading-screen">
        <div class="loading-screen-content">
          <?php if($image = $page->image('logo-light.svg')): ?>
            <img class="logo-home-loading-screen" src="<?= $image->url() ?>" alt="">
          <?php endif ?>
          <span id="homepage-subtitle-loading-screen"><?= $page->heading() ?></span>
        </div>
      </div> -->
      <!-- FULLSCREEN VIDEO LOADED FROM VIMEO -->
      <div class="vimeo-wrapper">
        <iframe src="https://player.vimeo.com/video/444547127?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1"
                 frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
        </iframe>
      </div>
    <!-- LOGO AND SUB HEADER CALLING LOGO SPECIFICALLY WITH IF STATEMENT  -->
      <div class="content-home-holder">
        <?php if($image = $page->image('logo-light.svg')): ?>
          <img class="logo-home" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h1 class="content-copy-home"><?= $page->text()->kt() ?></h1>
      </div>
    </div>




    <?php snippet('header') ?>
    <div class="content">
      <div class="content-left">

        <?php
          $images =  $page->gallery()->toFiles();
          foreach($images as $image): ?>
          <img class="<?= $image->orientation() ?>" src="<?= $image->url() ?>" alt="">
        <?php endforeach ?>

      </div>
      <div class="content-right">

      </div>
      <div class="content-right-container">
        <h1 class="content-title"><?= $page->title() ?></h1>
        <p class="content-copy"><?= $page->text()->kt() ?></p>
        <p class="content-prices"><?= $page->prices() ?></p>
      </div>
    </div>

    <?php snippet('footer') ?>





    <!-- //Home contente -->

    <?php snippet('header') ?>
    <div class="content-home">

      <!-- <div class="loading-screen">
        <div class="loading-screen-content">
          <?php if($image = $page->image('logo-light.svg')): ?>
            <img class="logo-home-loading-screen" src="<?= $image->url() ?>" alt="">
          <?php endif ?>
          <span id="homepage-subtitle-loading-screen"><?= $page->heading() ?></span>
        </div>
      </div> -->
      <!-- FULLSCREEN VIDEO LOADED FROM VIMEO -->
      <div class="vimeo-wrapper">
        <iframe src="https://player.vimeo.com/video/444547127?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1"
                 frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
        </iframe>
      </div>
    <!-- LOGO AND SUB HEADER CALLING LOGO SPECIFICALLY WITH IF STATEMENT  -->
      <div class="content-home-holder">
        <?php if($image = $page->image('logo-light.svg')): ?>
          <img class="logo-home" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h1 class="content-copy-home"><?= $page->text()->kt() ?></h1>
      </div>
    </div>

    <?php snippet('footer') ?>





    /*FULLSCREEN MENU*/
    // .homepage-fullscreen-menu{
    // 	background: @dark-orange;
    // 	height: 100vh;
    // 	width: 100vw;
    // 	z-index: 13;
    // 	top: 0;
    // 	left: 0;
    // 	position: relative;
    // 	opacity: 0;
    // 	#homepage-subtitle{
    // 		color: @light-grey;
    // 		font-family: agenda, sans-serif;
    // 		font-weight: 700;
    // 		font-style: normal;
    // 		font-size: 1em;
    // 		display: block;
    // 		margin: 0 auto;
    // 		text-align: center;
    // 		padding-top: 10px;
    // 		letter-spacing: 3px;
    // 	}
    // 	.homepage-menu-item-holder{
    // 		width: 100%;
    // 		margin: 0 auto;
    // 		display: grid;
    // 		grid-template-columns: repeat(3, 90px);
    //
    // 		justify-items: center;
    // 		justify-content: center;
    // 		align-items: top;
    // 		grid-gap: 150px;
    // 		position: absolute;
    // 		top: 50%;
    // 		transform: translate(0, -50%);
    // 		:nth-child(7){
    // 			grid-column-start: -3;
    // 		}
    // 		> a img{
    // 		width: 70px;
    // 		transition: 0.5s;
    // 		}
    // 		> a img:hover{
    // 		width: 75px;
    // 		transition: .3s;
    // 		}
    // 		// :nth-child(5) img{
    // 		// 	width: 70px;
    // 		// }
    // 		.homepage-menu-icon{
    // 			justify-content: center;
    // 		}
    // 		.homepage-menu-item{
    // 			color: @light-grey;
    // 			text-align: center;
    // 			display: block;
    // 			margin: 0 auto;
    // 			margin-top: 20px;
    // 			font-family: agenda, sans-serif;
    // 			font-weight: 700;
    // 			font-style: normal;
    // 			letter-spacing: 3px;
    // 			opacity: 0;
    // 		}
    // 	}
    // 	.homepage-menu-link:hover .homepage-menu-item{
    // 		transition: .5s;
    // 		opacity: 1;
    // 	}
    // 	.logo-fullscreen-menu{
    // 		width: 200px;
    // 		margin: 0 auto;
    // 		display: block;
    // 		padding-top: 6%;
    // 	}
    // }


    <!-- THIS ONE RENDERS LOADS OF CHILDREN -->
   <!-- <?php
        $children = $page->children()->listed();
        foreach ($children as $child): ?>
        <?php $images = $child->images(); ?>
        <?php if ($images->isNotEmpty()): ?>

        <ul class="showreel-flex" id="img-<?= $children->indexOf($child)+1 ?>">
          <?php foreach($page->children() as $showreel): ?>
            <?php
              $images =  $showreel->gallery()->toFiles();
              foreach($images as $image): ?>
              <li>
                <img class="showreel-flex-image"  src="<?= $image->url() ?>" alt="">
              </li>
            <?php endforeach ?>
          <?php endforeach ?>
        </ul>

        <?php endif ?>
      <?php endforeach ?>  -->




<!-- THIS ONE RENDERS THE FLEXBOX WELL BUT I CANT GET THE CORRECT DYNAMIC NUMBERS -->
        <!-- <ul class="showreel-flex">
          <?php foreach($page->children() as $showreel): ?>
            <?php
              $images =  $showreel->gallery()->toFiles();
              foreach($images as $image): ?>
              <li>
                <img class="showreel-flex-image" id="img-<?= $images->indexOf($showreel) ?>" src="<?= $image->url() ?>" alt="">
              </li>
            <?php endforeach ?>
          <?php endforeach ?>
        </ul> -->
    </div>
  </div>


        
  <ul class="showreel-flex gallery"  >
        <?php
          $children = $page->children()->listed();
          foreach ($children as $child): ?>
          <?php $images = $child->images(); ?>
          <?php if ($images->isNotEmpty()): ?>

                  
                      <?php foreach ($images as $image) : ?>
                        <li id="carousel-t">
                          <img class="showreel-flex-image" src="<?= $image->url() ?>" alt="" onclick="openModal();currentSlide(<?=  $children->indexOf($child)+1 ?>)">
                        </li>               
                    <?php endforeach ?>
                  

          <?php endif ?>
        <?php endforeach ?>
      </ul>




      <div class="menu-open">AAA</div>
      <div class="fullscreen-menu-container">
        <nav class="fullscreen-menu">
          <!--LOGO -->
          <?php if($image = $page->image('logo-light.svg')): ?>
            <img class="logo-fullscreen-menu" src="<?= $image->url() ?>" alt="">
          <?php endif ?>
          <span id="fullscreen-subtitle"><?= $page->heading() ?></span>
          <div class="fullscreen-menu-item-holder">
            <!--MENU IMAGES AND LINKS -->
            <?php foreach($site->children()->listed() as $subpage): ?>
              <a class="fullscreen-menu-link"  href="<?= $subpage->url() ?>">
                <?php
                $images =  $subpage->menuiconlight()->toFiles();
                foreach($images as $image): ?>
                  <img class="fullscreen-menu-icon" src="<?= $image->url() ?>" alt="">
                <?php endforeach ?>
                <span class="fullscreen-menu-item"><?= $subpage->title()->upper() ?></span>
              </a>

            <?php endforeach ?>
          </div>


          .fullscreen-menu-container{
    	background: red;
    	height: 100vh;
    	width: 100vw;
    	z-index: 13;
    	top: 0;
    	left: 0;
    	position: relative;
		opacity: 0;
		// display: none;
    	#fullscreen-subtitle{
    		color: @light-grey;
    		font-family: agenda, sans-serif;
    		font-weight: 700;
    		font-style: normal;
    		font-size: 1em;
    		display: block;
    		margin: 0 auto;
    		text-align: center;
    		padding-top: 10px;
    		letter-spacing: 3px;
    	}
    	.fullscreen-menu-item-holder{
    		width: 100%;
    		margin: 0 auto;
    		display: grid;
    		grid-template-columns: repeat(3, 90px);
    
    		justify-items: center;
    		justify-content: center;
    		align-items: top;
    		grid-gap: 150px;
    		position: absolute;
    		top: 50%;
    		transform: translate(0, -50%);
    		:nth-child(7){
    			grid-column-start: -3;
    		}
    		> a img{
    		width: 70px;
    		transition: 0.5s;
    		}
    		> a img:hover{
    		width: 75px;
    		transition: .3s;
    		}
    		// :nth-child(5) img{
    		// 	width: 70px;
    		// }
    		.fullscreen-menu-icon{
    			justify-content: center;
    		}
    		.fullscreen-menu-item{
    			color: @light-grey;
    			text-align: center;
    			display: block;
    			margin: 0 auto;
    			margin-top: 20px;
    			font-family: agenda, sans-serif;
    			font-weight: 700;
    			font-style: normal;
    			letter-spacing: 3px;
    			opacity: 0;
    		}
    	}
    	.fullscreen-menu-link:hover .fullscreen-menu-item{
    		transition: .5s;
    		opacity: 1;
    	}
    	.logo-fullscreen-menu{
    		width: 200px;
    		margin: 0 auto;
    		display: block;
    		padding-top: 6%;
    	}
    

      <!-- LOGO AND SUB HEADER CALLING LOGO SPECIFICALLY WITH IF STATEMENT  -->
  <!-- <div class="content-home-holder">
    <?php if($image = $page->image('logo-light.svg')): ?>
      <img class="logo-home" src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <h1 class="content-copy-home"><?= $page->text()->kt() ?></h1>
  </div> -->



        <!--CONTACT PAGE-->
        <div class="phone-element" id="phone-contact">
        <?php
          $contactPage = $site->findPageOrDraft('contact');
            if($image = $contactPage->image('sunset-cinema-1.2_result.jpg')): ?>
            <img id="phone-hire-img" class="phone-img" src="<?= $image->url() ?>" alt="">
        <?php endif ?>
        <h1 class="content-title"><?= $contactPage->title() ?></h1>
        <div class="content-copy"><?= $contactPage->text()->kt()?></div>
      </div>


      <!--TERMS PAGE-->
      <div class="phone-element" id="phone-terms">
          <?php $termsPage = $site->findPageOrDraft('terms'); ?>
          <h1 id="planning-title" class="terms-content-title"><?= $termsPage->planning() ?></h1>
          <div id="planning-copy" class="terms-content-copy"><?= $termsPage->planningText()->kt()?></div>
          <h1 id="covid-title" class="terms-content-title"><?= $termsPage->covid() ?></h1>
          <div id="covid-copy" class="terms-content-copy"><?= $termsPage->covidText()->kt()?></div>
          <h1 id="weather-title" class="terms-content-title"><?= $termsPage->weather() ?></h1>
          <div id="weather-copy" class="terms-content-copy"><?= $termsPage->weatherText()->kt()?></div>
          <h1 id="travel-title" class="terms-content-title"><?= $termsPage->travel() ?></h1>
          <div id="travel-copy" class="terms-content-copy"><?= $termsPage->travelText()->kt()?></div>
          <h1 id="airspace-title" class="terms-content-title"><?= $termsPage->airspace() ?></h1>
          <div id="airspace-copy" class="terms-content-copy"><?= $termsPage->airspaceText()->kt()?></div>
          <h1 id="imageRights-title" class="terms-content-title"><?= $termsPage->imageRights() ?></h1>
          <div id="imageRights-copy" class="terms-content-copy"><?= $termsPage->imageRightsText()->kt()?></div>
          <h1 id="guidance-title" class="terms-content-title"><?= $termsPage->guidance() ?></h1>
          <div id="guidance-copy" class="terms-content-copy"><?= $termsPage->guidanceText()->kt()?></div>
          <h1 id="payment-title" class="terms-content-title"><?= $termsPage->payment() ?></h1>
          <div id="payment-copy" class="terms-content-copy"><?= $termsPage->paymentText()->kt()?></div>
        </div>
    </div>