<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-oi8o31xSQq8S0RpBcb4FaLB8LJi9AT8oIdmS1QldR8Ui7KUQjNAnDlJjp55Ba8FG" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>images/favicon.ico" />

    <title><?php wp_title( '·', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

    <!-- google webmasters verification -->
    <meta name="google-site-verification" content="KiWj3oivtduOwITXsb1G_TAg-QG3zHvfeqH--wWXRHg" />

    <!-- global site tag (gtag.js) - google analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-102174952-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-102174952-4');
    </script>

    <!-- social media pop up -->
    <script>
    function modalCenter(pageURL, title,w,h) {
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
    </script>

  </head>

  <body class="pre-loader">

<header>

  <div id="home-page"></div>

  <?php get_template_part('navigation-secondary'); ?>

  <?php get_template_part('sidebar-secondary'); ?>

</header>

<!-- preloading screen -->
<div id="loader-wrapper">
  <div id="loader">
    <div class="square">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </div>
</div>
