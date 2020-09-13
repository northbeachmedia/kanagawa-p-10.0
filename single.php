<?php get_template_part('header-secondary'); ?>

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
