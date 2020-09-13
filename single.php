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

    <!-- social media pop up -->
    <script>
    function modalCenter(pageURL, title,w,h) {
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
    </script>

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

<div class="single-page">

  <div class="single-page-top">

    <?php if( is_single() ) { ?>
	    <?php if ( have_posts() ) : ?>
		    <?php while ( have_posts() ) : the_post(); ?>

           <div class="row no-gutters">
             <div class="col-xs-12">

               <h1><?php the_title(); ?></h1>

               <div class="single-hr">
                 <hr />
               </div>

               <div class="excerpt">
                 <?php the_excerpt(); ?>
               </div>

              <div class="time-stamp">
                <h2><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></h2>
              </div>

              <div class="thumbnail-image">
                <?php the_post_thumbnail(); ?>
              </div>

               <div class="caption-text">
                 <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
              </div>

              <div class="single-content">
                <?php the_content(); ?>
              </div>

               <div class="tags">
                 <ul>
                   <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
                 </ul>
               </div>

               <?php get_template_part('social'); ?>

               <div class="comment-section">
                 <h3>Leave a response</h3>
                 <?php comments_template(); ?>
              </div>

             </div>
           </div>

         <?php endwhile; ?>
       <?php else : ?>
    <?php endif; ?>

  <?php } //end is_single(); ?>

  </div> <!-- single-page-top -->

  <div class="single-page-bottom">

    <?php get_template_part('related-posts'); ?>

  </div> <!-- single-page-bottom -->

</div> <!-- single-page -->

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
