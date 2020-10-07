<?php get_template_part('header-secondary'); ?>

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
                    <a class="nav-link" href="https://open.spotify.com/user/v947bxvsytdi3v5510lhcqtqa">spotify</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/instagram">instagram</a>
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
