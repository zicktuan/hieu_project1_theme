<?php get_header(); ?>

<?php 
    $postType = get_post_type();

    switch ($postType) {
        case 'gmo_Product':
            get_template_part( 'Product', 'single' );
        break;
        case 'post':
            get_template_part( 'entry', 'content' );
        break;
        default:
            get_template_part( 'entry', 'content' );
        break;
    }
    

?>
<?php get_footer(); ?>