<div class="related-posts-section">

  <div class="related-posts-insight">

    <div class="related-posts-loop">

        <?php
          // default arguments
          $args = array(
            'posts_per_page' => 8,
            'post__not_in'   => array( get_the_ID() ), // exclude the current post
            'orderby' => 'date',
          );

          // query posts
          $wpex_query = new wp_query( $args );

          // loop through posts
          foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

          <?php if (in_category( 'insight' )) : ?>

            <div class="row no-gutters">
              <div class="col-xs-12">

                <div class="date">
                  <i class="fas fa-clock"></i>
                  <p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
                </div>

                <h1><?php the_title(); ?></h1>

                <div class="single-hr">
                  <hr />
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

              </div>
            </div>

          <?php endif; ?>

          <!-- end loop and reset post data -->
          <?php endforeach; wp_reset_postdata(); ?>

    </div> <!-- related-posts-loop -->

  </div> <!-- related-posts-insight -->

</div> <!-- related-posts-section -->
