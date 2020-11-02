<?php
/*
template name: insight
template post type: post
*/
?>

<?php get_template_part('header-secondary'); ?>

<div class="single-page-insight">

  <div class="single-page-top">

    <?php if( is_single() ) { ?>
	    <?php if ( have_posts() ) : ?>
		    <?php while ( have_posts() ) : the_post(); ?>

          <div class="row no-gutters">
            <div class="col-xs-12">

              <div class="date">
                <i class="fas fa-clock"></i>
                <p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
              </div>

              <h1><?php the_title(); ?></h1>

              <div class="single-content">
                <?php the_content(); ?>
              </div>

              <div class="tags">
                <ul>
                  <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
                </ul>
              </div>

              <?php get_template_part('social'); ?>

            </div>
          </div>

        <?php endwhile; ?>
      <?php else : ?>
   <?php endif; ?>

   <?php } //end is_single(); ?>

   <?php get_template_part('related-posts-insight'); ?>

  </div> <!-- single-page-top -->

  <div class="single-page-bottom">

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
                    <a class="nav-link" href="https://open.spotify.com/user/v947bxvsytdi3v5510lhcqtqa">spotify</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/instagram">insta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/privacy-policy">privacy</a>
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
