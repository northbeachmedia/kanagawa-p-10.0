<?php get_template_part('header-secondary'); ?>

<div class="single-page-insight">

  <div class="single-sidebar">

  </div>

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

              <?php the_field('content'); ?>

              <div class="tags">
                <ul>
                  <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
                </ul>
              </div>

              <?php get_template_part('social'); ?>

              <?php get_template_part('author-bio'); ?>

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

   <!-- deprecated and replaced by related-posts template -->
   <?php /* get_template_part('related-posts-insight'); */ ?>

  </div> <!-- single-page-top -->

  <div class="single-page-bottom">

    <?php get_template_part('related-posts'); ?>

  </div> <!-- single-page-bottom -->

</div> <!-- single-page -->

<?php get_template_part('footer-secondary') ?>

<?php wp_footer(); ?>

  </body>
</html>
