<!-- This is the header file. loads style sheets etc and just the menu as for JANES WEBSITE that is the only thing repeated through out all the site.  -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php echo $page->metaTags() ?>
    <title><?= $page->title() ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/fjw5ego.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet/less" type="text/css" href="assets/css/stylesheet.less" />
    <?= js('assets/js/less.min.js') ?>
    <?= js('assets/js/script.js') ?>

  </head>
  <body>
    <div class="container">
