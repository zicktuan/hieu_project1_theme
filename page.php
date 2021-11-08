<?php get_header(); ?>
<?php
    global $gmotheme, $GMOPlugin;
    $optionTheme  = $GMOPlugin->themeSetting->getSettings();
    $pageId = get_the_ID();
?>
<div class="content-area">
    <?php if($pageId == $optionTheme['gmo_job_page_list']):?>
        <?php get_template_part( 'shop' ); ?>
    <?php else: ?>
        <?php the_content(); ?>
    <?php endif ?>
   
</div>
    
<?php get_footer(); ?>