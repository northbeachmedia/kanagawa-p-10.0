<div class="related-posts-section">

  <h3>Read another</h3>

  <div class="related-posts-loop">

    <div class="grid-related-posts" data-masonry='{ "itemSelector": ".grid-item" }'>

      <?php
        // default arguments
        $args = array(
          'cat' => '-20', // remove reading category single posts
          'orderby' => 'rand',
          'posts_per_page' => 3,
          'post__not_in'   => array( get_the_ID() ), // exclude the current post
        );

        // query posts
        $wpex_query = new wp_query( $args );

        // loop through posts
        foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

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

        <?php else : ?>

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

          <?php endif; ?>

        <!-- end loop and reset post data -->
        <?php endforeach; wp_reset_postdata(); ?>

    </div> <!-- .grid-related-posts -->

  </div> <!-- .related-posts-loop -->

</div> <!-- .related-posts-section -->
