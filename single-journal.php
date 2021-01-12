<?php get_template_part('header-secondary'); ?>

<div class="single-page">

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

               <div class="excerpt">
                 <?php the_excerpt(); ?>
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

  </div> <!-- single-page-top -->

  <div class="single-page-bottom">

    <?php get_template_part('related-posts'); ?>

  </div> <!-- single-page-bottom -->

</div> <!-- single-page -->

<?php get_template_part('footer-secondary') ?>

<?php wp_footer(); ?>

  </body>
</html>
