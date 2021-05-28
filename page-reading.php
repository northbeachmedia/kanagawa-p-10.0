<?php /* template name: reading-page */ ?>

<?php get_template_part('header-secondary'); ?>

<div class="posts-page">

  <div class="posts-page-top">

    <div class="row">

      <div class="col-xs-12">
        <h2>Recommended reading</h2>
        <p>Making reading a regular habit is a great way to expand your knowledge and skills. Helping us be better equipped to face challenges in our professional and personal lives.</p>
        <p>Here are a few recommendation worth your consideration.</p>
      </div>

    </div> <!-- row -->

    <div class="grid-page-reading" data-masonry='{ "itemSelector": ".grid-item" }'>

      <?php
        // default arguments
        $args = array(
          'posts_per_page' => 6,
          'category_name' => 'reading'
        );

        // query posts
        $wpex_query = new wp_query( $args );

        // loop through posts
        foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

        <div class="grid-item">
          <div class="reading-category">
            <div class="card">
              <div class="card-image">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="card-body">

                <p class="title"><?php the_title(); ?></p>

                <p><?php the_field('author'); ?></p>

                <p><?php the_field('book_review_text'); ?></p>

                <p><?php the_field('book_link'); ?></p>

              </div>
            </div>
          </div>
        </div>

      <!-- end loop and reset post data -->
      <?php endforeach; wp_reset_postdata(); ?>

    </div> <!-- grid -->

  </div> <!-- .posts-page-top -->

  <div class="posts-page-bottom">
  </div>

</div>

<?php get_template_part('footer-secondary') ?>

<?php wp_footer(); ?>

  </body>
</html>
