<!-- This is the header file. loads style sheets etc and just the menu as for JANES WEBSITE that is the only thing repeated through out all the site.  -->
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
  <body>
    <div class="container">
      <!-- <nav class="menu">
        <div class="menu-item-holder">
          <?php foreach($site->children()->listed() as $subpage): ?>
            <a class="menu-item" href="<?= $subpage->url() ?>">
              <?= $subpage->title() ?>
            </a>
            <?php
              $images =  $subpage->menuicon()->toFiles();
              foreach($images as $image): ?>
                <a href="<?= $subpage->url() ?>"><img class="menu-icon" src="<?= $image->url() ?>" alt=""></a>
              <?php endforeach ?>
          <?php endforeach ?>
        </div>
      </nav> -->
