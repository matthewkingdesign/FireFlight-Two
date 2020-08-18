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
