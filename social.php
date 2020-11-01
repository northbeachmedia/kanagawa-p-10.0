<div class="social-bottom">

  <div class="row no-gutters">
    <div class="col-xs-12">

      <a href="javascript:void(0);" onclick="modalCenter('https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>', 'modalOne',400,400);">
        <i class="fab fa-twitter"></i>
      </a>

      <a href="javascript:void(0);" onclick="modalCenter('https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>', 'modalTwo',400,400);">
        <i class="fab fa-linkedin-in"></i>
      </a>

      <a href="javascript:void(0);" onclick="modalCenter('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>', 'modalThree',400,400);">
        <i class="fab fa-facebook-f"></i>
      </a>

      <div data-clipboard-text="<?php the_permalink(); ?>" class="clipboard" data-toggle="tooltip" title="copy link">
        <i class="fas fa-share"></i>
      </div>

    </div>
  </div>

</div>
