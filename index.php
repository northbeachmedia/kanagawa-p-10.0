<?php get_template_part('header-secondary'); ?>

<div class="posts-page">

  <div class="posts-page-top">

    <div class="row">

      <div class="col-xs-12">
        <h2>Words and insights</h2>
        <p>Writing is an essential step in collecting and analyzing strategies and ideas. I write on today's web design, product, business and marketing topics.</p>
      </div>

    </div> <!-- row -->

    <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>

      <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

        <?php if (in_category( 'journal' )) : ?>

          <div class="grid-item">
            <a href="<?php the_permalink(); ?>">
              <div class="journal-category">
                <div class="card">
                  <div class="card-image">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="card-body">
                    <p class="title"><?php the_title(); ?></p>
                    <p class="date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
                    <p><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>

        <?php elseif (in_category('insight')) :  ?>

          <div class="grid-item">
            <a href="<?php the_permalink(); ?>">
              <div class="insight-category">
                <div class="card">
                  <div class="insight-label">
                    <p>Insight</p>
                  </div>
                  <div class="card-body">
                    <p class="title"><?php the_title(); ?></p>
                    <p class="date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
                    <p><?php the_excerpt(); ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- else statement removed to hide reading category single posts -->

          <?php endif; ?>

      <?php endwhile; else: ?>

      <?php endif; ?>

    </div> <!-- .grid -->

    <?php next_posts_link( '<div class="button-see-more">See more</div>' ); ?>

  </div> <!-- .posts-page-top -->

  <div class="posts-page-bottom">
  </div>

</div>

<?php get_template_part('footer-secondary') ?>

<?php wp_footer(); ?>

  </body>
</html>
