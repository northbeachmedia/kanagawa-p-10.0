<?php get_template_part('header-secondary'); ?>

<div class="posts-page">

  <div class="posts-page-top">

    <div class="content-loop">

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

          <?php endwhile; else: ?>

          <?php endif; ?>

        </div> <!-- grid -->

      <?php next_posts_link( '<div class="button-see-more">See more</div>' ); ?>

    </div> <!-- .content-loop -->

  </div> <!-- .posts-page-bottom -->

  <div class="posts-page-bottom">
  </div>

</div>

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
                    <a class="nav-link" href="<?php echo get_option('home'); ?>/instagram">instagram</a>
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
