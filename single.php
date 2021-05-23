<?php if (has_category('journal')) : ?>

  <?php get_template_part('single-journal'); ?>

<?php elseif (has_category('insight')) :  ?>

  <?php get_template_part('single-insight'); ?>

<?php else : ?>

  <?php get_template_part('single-reading'); ?>

<?php endif; ?>
