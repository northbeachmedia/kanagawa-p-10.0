<div class="related-posts-section">

  <h3>Read another</h3>

  <div class="related-posts-loop">

    <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>

          <?php
            // default arguments
            $args = array(
              'posts_per_page' => 3,
              'post__not_in'   => array( get_the_ID() ), // exclude the current post
              'orderby' => 'rand',
            );

            // query posts
            $wpex_query = new wp_query( $args );

            // loop through posts
            foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

            <div class="grid-item">
              <a href="<?php the_permalink(); ?>">
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
              </a>
            </div>

            <!-- end loop and reset post data -->
            <?php endforeach; wp_reset_postdata(); ?>

    </div> <!-- grid -->

  </div> <!-- related-posts-loop -->

</div> <!-- related-posts-section -->
