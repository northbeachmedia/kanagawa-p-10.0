<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-oi8o31xSQq8S0RpBcb4FaLB8LJi9AT8oIdmS1QldR8Ui7KUQjNAnDlJjp55Ba8FG" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>images/favicon.ico" />

    <title><?php wp_title( '·', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>

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

  </head>

  <body>

<header>

  <div class="pos-f-t">

    <nav class="navbar navbar-light">
      <div class="navbar-inner">
        <div class="row">

          <div class="col-xs-4">
            <a href="<?php echo get_option('home'); ?>">
              <h1>northbeach.media</h1>
            </a>
          </div>

          <div class="col-xs-8">

            <div class="hamburger-menu">

              <button class="navbar-toggler hidden-md-up btn-menu" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="btn-menu__bars"></i>
              </button>

              <div class="collapse navbar-toggleable-sm" id="navbarResponsive">
                <ul class="nav navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/#about-page">about</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/#work-page">work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/#word-page">words</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/#contact">contact</a>
                  </li>
                </ul>
              </div>

            </div>

          </div>

        </div>
      </div>
    </nav>

  </div>

</header>

<div class="page">

  <div class="page-top">

    <div class="row no-gutters">
      <div class="col-xs-12">
        <?php if( is_page()) { ?>

        <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title(); ?></h2>

          <p><?php the_content(); ?></p>

        <?php endwhile; ?>

        <?php endif; ?>

        <?php } // end is_page(); ?>
      </div>
    </div>

  </div>

  <div class="page-bottom">
  </div>

</div>

<footer>

  <div class="footer-top">
  </div>

  <div class="footer-bottom">

    <div class="footer-navigation-outer">
      <div class="footer-navigation-inner">

        <nav class="navbar navbar-light">
          <div class="navbar-inner">
            <div class="row">
              <div class="col-xs-12">

                <ul class="nav navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/instagram">insta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/privacy-policy">privacy policy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/terms">terms</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </nav>

      </div>
    </div>

  </div> <!-- footer-bottom -->

</footer>

<?php wp_footer(); ?>

  </body>
</html>
