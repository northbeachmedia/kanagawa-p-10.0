<?php /* template name: page-home */ ?>

<?php get_header(); ?>

<div class="home-page">

  <div class="home-page-top">
    <div class="row no-gutters">
      <div class="col-xs-12">
        <h2>Making performance marketing agile, scalable, and customer centric.</h2>
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
        <p>A Canadian 🇨🇦 based performance marketer, web developer and avid reader.</p>
        <p>I use agile marketing principles, and data-driven analysis to drive evidence-based revenue growth. I believe in creating scalable processes with a focus on customer-centricity.</p>
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

<div id="words-page"></div>

<div class="words-page">

  <div class="words-page-top">

    <div class="row">

      <div class="col-xs-12">
        <h2>Words and insights</h2>
        <p>Writing is an essential step in collecting and analyzing strategies and ideas. I write on today's marketing, digital culture, and business topics.</p>
      </div>

    </div> <!-- row -->

    <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>

      <?php

      // default arguments
      $args = array(
        'posts_per_page' => 3,
        'category_name' => 'journal,insight'
      );

        // query posts
        $wpex_query = new wp_query( $args );

        // loop through posts
        foreach( $wpex_query->posts as $post ) : setup_postdata( $post );

        ?>

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

    <button>
      <div class="button-show-all">
        <a href="<?php echo get_site_url(); ?>/posts-page">show all</a>
      </div>
    </button>

  </div>

  <div class="words-page-bottom">

  </div>

</div> <!-- word-page -->

<div class="cta-section">

  <div class="cta-box">

    <div class="row">

      <div class="col-xs-12">
        <h3>Are you looking for a great read on marketing, digital culture, and business? Take a moment and review my recommended books.</h3>
      </div> <!-- col-xs-12 -->

      <div class="col-xs-12">
        <button>
          <div class="button-cta-box">
            <a href="<?php echo get_site_url(); ?>/recommended-reading">Browse</a>
          </div>
        </button>
      </div> <!-- col-xs-12 -->

    </div> <!-- .row -->

  </div> <!-- .cta-box -->

</div> <!-- .cta-section -->

<div id="work-page"></div>

<div class="work-page">

  <div class="work-page-top">

    <div class="row">
      <div class="col-xs-12">
        <h2>A few of my projects</h2>
        <p>I've worked in multiple industries helping scale traffic, users, and revenue growth. I believe in creating digital strategies with an emphasis on customer centricity through a minimalistic approach.</p>
      </div>
    </div>

    <div class="row row-column">

      <div class="col-md-6">
        <h3>Solis</h3>
        <p>A high-fidelity prototype of a web application providing real-time stress measurement.</p>
        <a href="https://www.figma.com/file/vvOtGpR5aJk4lSkzYSCZx9/Prototype?node-id=0%3A1" target="_blank">
          <button>
            <div class="button-visit-site">visit site</div>
          </button>
        </a>
      </div>

      <div class="col-md-6">
        <h3>CSS parallax demo</h3>
        <p>A one page scoller demonstrating a pure CSS parallax scrolling effect.</p>
        <a href="https://northbeachmedia.github.io/parallax-demo/" target="_blank">
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
