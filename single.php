<?php if ( has_category('journal')) : ?>
  <?php get_template_part('single-journal'); ?>
<?php else : ?>
  <?php get_template_part('single-insight'); ?>
<?php endif; ?>
