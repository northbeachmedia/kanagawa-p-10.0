<?php /* template name: home-page */ ?>

<?php get_header(); ?>

<div class="home-page">

  <div class="home-page-top">
    <div class="row no-gutters">
      <div class="col-xs-12">
        <h2>Making the Internet simple and beautiful one line of code at a time</h2>
      </div>
    </div>
  </div>

  <div class="home-page-bottom">
  </div>

</div> <!-- home-page -->

<div id="about-page"></div>

<div class="about-page">
  <div class="about-page-top">

    <div class="row no-gutters">
      <div class="col-xs-12">
        <h2>About me</h2>
        <p>Hi! I'm Ben. I'm a technical & performance marketer, web developer, avid reader and snowboard enthusiast. I build metric-driven marketing strategies to scale and drive evidence-based revenue growth.</p>
        <p>I'm proudly working for Sonova helping promote innovative hearing care solutions.</p>
        <a data-target="#contactmodal" data-toggle="modal" href="contactmodal">
          <button>
            <div class="button-say-hello">say “hello”</div>
          </button>
        </a>
      </div>
    </div>

  </div>

  <div class="about-page-bottom">
  </div>

</div> <!-- about-page -->

<div id="word-page"></div>

<div class="word-page">

  <div class="word-page-top">

    <div class="row">

      <div class="col-xs-12">
        <h2>Words and insights</h2>
        <p>Writing is an essential step in collecting and analyzing strategies and ideas. I write short-form insights on today's web design and marketing topics.</p>
      </div>

    </div> <!-- row -->

    <div class="content-loop">

      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>

        <?php
          // default arguments
          $args = array(
            'posts_per_page' => 3,
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

      </div> <!-- grid -->

    </div> <!-- content-loop -->

    <button>
      <div class="button-show-all">
        <a href="<?php echo get_site_url(); ?>/posts-page">show all</a>
      </div>
    </button>

  </div>

  <div class="word-page-bottom">
  </div>

</div> <!-- word-page -->

<div id="work-page"></div>

<div class="work-page">

  <div class="work-page-top">

    <div class="row">
      <div class="col-xs-12">
        <h2>A few of my projects</h2>
        <p>I've worked on several websites and marketing initiatives in both my professional and personal time. I believe in creating digital assets with an emphasis on usability and responsiveness through a minimalistic design approach.</p>
      </div>
    </div>

    <div class="row row-column">

      <div class="col-md-6">
        <h3>thecrewishere.com</h3>
        <p>The most interesting and unique video content from around the Internet.</p>
        <a href="https://thecrewishere.com/" target="_blank">
          <button>
            <div class="button-visit-site">visit site</div>
          </button>
        </a>
      </div>

      <div class="col-md-6">
        <h3>sitesyoushouldknow.com</h3>
        <p>A tribute and collection of all that's great on the Internet.</p>
        <a href="https://sitesyoushouldknow.com/" target="_blank">
          <button>
            <div class="button-visit-site">visit site</div>
          </button>
        </a>
      </div>

      <div class="col-md-6">
        <h3>Solis</h3>
        <p>A high-fidelity prototype of a web application providing real-time stress measurement.</p>
        <a href="https://www.figma.com/file/vvOtGpR5aJk4lSkzYSCZx9/Prototype?node-id=0%3A1" target="_blank">
          <button>
            <div class="button-visit-site">visit site</div>
          </button>
        </a>
      </div>

    </div>

  </div> <!-- work-page-top -->

  <div class="work-page-bottom">
  </div>

</div> <!-- work-page -->

<?php get_footer(); ?>
