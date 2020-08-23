<?php /* template name: home-page */ ?>

<?php get_header(); ?>

<div class="home-page">

  <div class="home-page-top">
    <div class="row no-gutters">
      <div class="col-xs-12">
        <h1>northbeach.media</h1>
        <h2>Making the Internet more beautiful and simple one line of code at a time.</h2>
        <p>Technical & Performance Marketer, Web Developer, etc.</p>
      </div>
    </div>
  </div>

  <div class="home-page-bottom">
  </div>

</div>

<div id="about-page"></div>

<div class="about-page">
  <div class="about-page-top">

    <div class="row no-gutters">
      <div class="col-lg-6">
        <h2>About me</h2>
        <hr />
        <p>Hi! I'm Ben. I'm a technical & performance marketer, web developer, avid reader and snowboard enthusiast. I build metric-driven marketing strategies to scale and drive evidence-based revenue growth.</p>
        <p>I'm proudly working for Sonova helping promote innovative hearing care solutions.</p>
        <a data-target="#contactmodal" data-toggle="modal" href="contactmodal">
          <button>
            <div class="button-say-hello">say “hello”</div>
          </button>
        </a>
      </div>

      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri(); ?>/images/profile.png" />
      </div>
    </div>

  </div>

  <div class="about-page-bottom">
  </div>

</div>

<div id="work-page"></div>

<div class="work-page">

  <div class="work-page-top">

    <div class="row">
      <div class="col-xs-12">
        <h2>A few of my projects</h2>
        <hr />
        <p>I've worked on several websites and marketing initiatives in both my professional and personal time. I believe in creating digital assets with an emphasis on usability and responsiveness through a minimalistic design approach.</p>
      </div>
    </div>

    <div class="row row-column">

      <div class="col-md-6">
        <a href="https://thecrewishere.com/" target="_blank">thecrewishere.com</a>
        <p>The most interesting and unique video content from around the Internet.</p>
        <a href="https://thecrewishere.com/" target="_blank">
          <button>
            <div class="button-visit-site">visit site</div>
          </button>
        </a>
      </div>

      <div class="col-md-6">
        <a href="https://sitesyoushouldknow.com/" target="_blank">sitesyoushouldknow.com</a>
        <p>A tribute and collection of all that's great on the Internet.</p>
        <a href="https://sitesyoushouldknow.com/" target="_blank">
          <button>
            <div class="button-visit-site">visit site</div>
          </button>
        </a>
      </div>

    </div>

  </div> <!-- work-page-top -->

  <div class="work-page-bottom">
  </div>

</div>

<div id="word-page"></div>

<div class="word-page">

  <div class="word-page-top">

    <div class="row">

      <div class="col-xs-12">
        <h2>Words and insights</h2>
        <hr />
        <p>Writing is an essential step in collecting and analyzing strategies and ideas. I write short-form insights on today's web design and marketing topics.</p>
      </div>

    </div> <!-- row -->

    <div class="content-loop">

      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>

        <?php $args = array('posts_per_page' => 3); $query = new WP_Query($args); ?>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

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

        <?php endwhile; wp_reset_postdata(); else : ?>

        <div class="col-xs-12">
          <p>Sorry. At the moment there's no posts to display.</p>
        </div>

        <?php endif; ?>

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

</div>

<?php get_footer(); ?>
