<?php
    global $GMOPlugin;
    $optionTheme  = $GMOPlugin->themeSetting->getSettings();
    $pageId = get_the_ID();

    $argsAll = array(
        'posts_per_page' => -1,
        'post_type'   => 'nat_product',
    );
    $itemPerPage = !empty($optionTheme['gmo_general_product_item_per_post']) ? $optionTheme['gmo_general_product_item_per_post'] : 10;
    $currentPage = !empty($_GET['gpage']) ? $_GET['gpage'] : 1;
    $offset = ($currentPage - 1) * $itemPerPage;
    $totalItem = count(get_posts($argsAll));
    $totalPage = ceil($totalItem/$itemPerPage);
    

    $argsProduct = [
        'posts_per_page' => $itemPerPage,
        'post_type'   => 'nat_product',
        'offset' => $offset
    ];
    $products = get_posts($argsProduct);
?>
<div class="content-area">

<!-- BREADCRUMBS -->
<section class="page-section breadcrumbs">
    <div class="container">
        <div class="page-header">
            <h1><?php echo get_the_title($pageId) ?></h1>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo home_url() ?>">Home</a></li>
            <li class="active"><?php echo get_the_title($pageId) ?></li>
        </ul>
    </div>
</section>
<!-- /BREADCRUMBS -->

<!-- PAGE WITH SIDEBAR -->
<section class="page-section with-sidebar">
    <div class="container">
        <div class="row">
            <!-- CONTENT -->
            <div class="col-md-12 content" id="content">

                <div class="main-slider sub">
                    <div class="owl-carousel" id="main-slider">

                        <!-- Slide 1 -->
                        <?php if(!empty($optionTheme['product_slider'])):?>
                        <?php foreach($optionTheme['product_slider'] as $slideItem): ?>
                            <div class="item slide1 sub">
                            <img class="slide-img" src="<?php echo !empty($slideItem['img']) ? $slideItem['img'] : '' ?>" alt=""/>
                            <div class="caption">
                                <div class="container">
                                    <div class="div-table">
                                        <div class="div-cell">
                                            <div class="caption-content">
                                                <h2 class="caption-title"><span><?php echo !empty($slideItem['title']) ? $slideItem['title'] : '' ?></span></h2>
                                                <h3 class="caption-subtitle"><span><?php echo !empty($slideItem['sub_title']) ? $slideItem['sub_title'] : '' ?></span></h3>
                                                <?php if(!empty($slideItem['url'])): ?>
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme" href="<?php echo $slideItem['url']?>">Shop Now</a>
                                                    </p>
                                                <?php endif ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <?php endif ?>
                        <!-- /Slide 1 -->

                    </div>
                </div>
                <div class="shop-sorting">
                    <div class="row">
                        <div class="col-sm-8">
                            
                        </div>
                    </div>
                </div>

                <!-- Products grid -->
                <div class="row products grid">
                    <?php if(!empty($products[0])):?>
                    <?php foreach($products as $product): 
                        $price = get_post_meta($product->ID, 'gmo_product_price', true);
                        $discount = get_post_meta($product->ID, 'gmo_product_price_discount', true);
                    ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="thumbnail no-border no-padding">
                                <div class="media">
                                    <a class="media-link" href="<?php echo get_the_permalink($product->ID)?>">
                                        <img src="<?php echo get_the_post_thumbnail_url( $product->ID, 'gmo-thumbnail-165x262' ); ?>" alt=""/>
                                    </a>
                                </div>
                                <div class="caption text-center">
                                    <h4 class="caption-title">
                                        <?php echo $product->post_title ?>
                                    </h4>
                                    <div class="price">
                                        <ins><?php echo number_format($discount, 0, '', ',') . 'VNĐ'; ?></ins> 
                                        <del><?php echo number_format($price, 0, '', ',') . 'VNĐ'; ?></del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <?php endif ?>
                </div>
                <!-- /Products grid -->


                <?php if($totalPage > 1): ?>
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <?php if($currentPage > 1):?>
                                <li class="disabled"><a href="?gpage=1"><i class="fa fa-angle-double-left"></i>Previous</a></li>
                            <?php endif ?>
                            <?php for($num = 1; $num <= $totalPage; $num++): ?>
                                <?php if($num == $currentPage):?>
                                    <li class="active">
                                        <a style="background-color: rgba(35, 35, 35, 0.1);" href="?gpage=<?php echo $num ?>"><?php echo $num ?> 
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li><a href="?gpage=<?php echo $num ?>"><?php echo $num ?></a></li>
                                <?php endif ?>
                            <?php endfor ?>
                            <?php if($currentPage < $totalPage):?>
                                <li><a href="?gpage=<?php echo $totalPage?>">Next <i class="fa fa-angle-double-right"></i></a></li>
                            <?php endif ?>
                        </ul>
                    </div>
                <?php endif ?>
                <!-- /Pagination -->

            </div>
            <!-- /CONTENT -->

        </div>
    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->

</div>