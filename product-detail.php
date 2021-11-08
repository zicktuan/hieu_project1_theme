
<?php
    global $GMOPlugin;
    $optionTheme  = $GMOPlugin->themeSetting->getSettings();
    $price = get_post_meta(get_the_ID(), 'gmo_product_price', true);
    $discount = get_post_meta(get_the_ID(), 'gmo_product_price_discount', true);
    $productGallery  = get_post_meta($post->ID, 'product_gallery', true);
    $argsGallery = explode(",",$productGallery);
    $itemPerPage = !empty($optionTheme['gmo_general_product_item_per_post']) ? $optionTheme['gmo_general_product_item_per_post'] : 10;
    $argsQuerySimilar = [
        'posts_per_page' => $itemPerPage,
        'post_type' => 'nat_product',
        'post__not_in' => [$post->ID]
    ];

    $relatedPosts = get_posts($argsQuerySimilar);
?>

<section class="page-section">
    <div class="container">

        <div class="row product-single">
            <div class="col-md-6">
                <div class="badges">
                    <div class="hot">hot</div>
                    <div class="new">new</div>
                </div>
                <div class="owl-carousel img-carousel">
                    <div class="item">
                        <a class="btn btn-theme btn-theme-transparent btn-zoom" href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                        <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" data-gal="prettyPhoto">
                            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a class="btn btn-theme btn-theme-transparent btn-zoom" href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                        <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" data-gal="prettyPhoto">
                            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a class="btn btn-theme btn-theme-transparent btn-zoom" href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                        <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" data-gal="prettyPhoto">
                            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" alt=""/>
                        </a>
                    </div>
                    <div class="item">
                        <a class="btn btn-theme btn-theme-transparent btn-zoom" href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" data-gal="prettyPhoto"><i class="fa fa-plus"></i></a>
                        <a href="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" data-gal="prettyPhoto">
                            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'gmo-thumbnail-555x652' ); ?>" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="row product-thumbnails">
                    <?php $i = 0; foreach ($argsGallery as $value): $i++ ?>
                        <?php 
                            $imageId = get_post($value);
                            // print_r($imageId);
                            $image   = wp_get_attachment_image_src($value, 'bookawesome-thumbnail-141x75');
                            $argsCaption = [
                                'title'       => isset( $imageId->post_excerpt ) ? $imageId->post_excerpt : '',
                            ];
                        ?>
                        <div class="col-xs-2 col-sm-2 col-md-3">
                            <a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [<?php echo $i?>,300]);">
                                <img src="<?php echo esc_attr($image[0]); ?>" alt="<?php echo !empty($imageId->post_title) ? esc_attr($imageId->post_title) : ''; ?>"/>
                            </a>
                        </div>
                        
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="product-title"><?php the_title() ?></h2>
                
                <hr class="page-divider small"/>

                <div class="product-price"><?php echo number_format($discount, 0, '', ',') . 'VNĐ'; ?></div>
                <div class="price"><del><?php echo number_format($price, 0, '', ',') . 'VNĐ'; ?></del></div>
                <hr class="page-divider"/>

                <?php if(!empty($post->post_excerpt)):?>
                <div class="product-text">
                    <?php echo $post->post_excerpt ?>
                </div>
                <hr class="page-divider"/>
                <?php endif?>
            </div>
        </div>

    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="tabs-wrapper content-tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#item-description" data-toggle="tab">Item Description</a></li>
                <!-- <li><a href="#reviews" data-toggle="tab">Reviews (2)</a></li> -->
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="item-description">
                    <?php the_content() ?>
                </div>
                <!-- <div class="tab-pane fade" id="reviews">

                    <div class="comments">
                        <div class="media comment">
                            <a href="#" class="pull-left comment-avatar">
                                <img alt="" src="<?php echo get_template_directory_uri()?>/assets/img/preview/avatars/avatar-1.jpg" class="media-object">
                            </a>
                            <div class="media-body">
                                <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                            </div>
                        </div>
                        <div class="media comment">
                            <a href="#" class="pull-left comment-avatar">
                                <img alt="" src="assets/img/preview/avatars/avatar-3.jpg" class="media-object">
                            </a>
                            <div class="media-body">
                                <p class="comment-meta"><span class="comment-author"><a href="#">User Name Here</a> <span class="comment-date"> 26 days ago <i class="fa fa-flag"></i></span></span></p>
                                <p class="comment-text">Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismd. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-form">
                        <h4 class="block-title">Add a Review</h4>
                        <form method="post" action="#" name="comments-form" id="comments-form">
                            <div class="form-group"><input type="text" placeholder="Your name and surname" class="form-control" title="comments-form-name" name="comments-form-name"></div>
                            <div class="form-group"><input type="text" placeholder="Your email adress" class="form-control" title="comments-form-email" name="comments-formemail"></div>
                            <div class="form-group"><textarea placeholder="Your message" class="form-control" title="comments-form-comments" name="comments-form-comments" rows="6"></textarea></div>
                            <div class="form-group"><button type="submit" class="btn btn-theme btn-theme-transparent btn-icon-left" id="submit"><i class="fa fa-comment"></i> Review</button></div>
                        </form>
                    </div>

                </div> -->
            </div>
        </div>
    </div>
</section>

<?php if(!empty($relatedPosts[0])):?>
<section class="page-section">
    <div class="container">
        <h2 class="section-title section-title-lg"><span>Related Products</span></h2>
        <div class="featured-products-carousel">
            <div class="owl-carousel" id="featured-products-carousel">
                <?php foreach($relatedPosts as $relateItem):
                    $price = get_post_meta($relateItem->ID, 'gmo_product_price', true);
                    $discount = get_post_meta($relateItem->ID, 'gmo_product_price_discount', true);
                ?>
                <div class="thumbnail no-border no-padding">
                    <div class="media">
                        <a class="media-link" href="<?php echo get_the_permalink($relateItem->ID)?>">
                            <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'gmo-thumbnail-263x360' ); ?>" alt=""/>
                            <span class="icon-view">
                                <strong><i class="fa fa-eye"></i></strong>
                            </span>
                        </a>
                    </div>
                    <div class="caption text-center">
                        <h4 class="caption-title"><?php echo !empty($relateItem->post_title) ?$relateItem->post_title : '' ?></h4>
                        
                        <div class="price">
                            <ins><?php echo number_format($discount, 0, '', ',') . 'VNĐ'; ?></ins> 
                            <del><?php echo number_format($price, 0, '', ',') . 'VNĐ'; ?></del>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        
    </div>
</section>
<?php endif ?>