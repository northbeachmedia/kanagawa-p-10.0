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

<?php get_template_part('footer-secondary') ?>

<?php wp_footer(); ?>

  </body>
</html>
