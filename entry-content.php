
<?php if (get_post_type( get_the_ID() ) == 'nat_product'):  ?>
    <?php get_template_part( 'product', 'detail' ); ?>
<?php else :?>
    <?php get_template_part( 'blog', 'detail' ); ?>
<?php endif ?>
