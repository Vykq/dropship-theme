<?php
$id = get_field('product');
if( $id ):
    $product = wc_get_product($id);

    $mainimg = get_the_post_thumbnail_url($id); //Main image
    $attachment_ids = $product->get_gallery_image_ids(); //Images gallery
    
    $regprice = $product->get_regular_price();
    $saleprice = $product->get_sale_price();
    ?>
<section class="featured-product-block">
    <div class="container">
        <div class="wrapper">
            <div class="left">
                <div id="featured-product-gallery" class="splide" aria-label="Featured product">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="<?php echo $mainimg; ?>" alt="<?php echo get_the_title($id);?>">
                            </li>
                                <?php
                                    foreach( $attachment_ids as $attachment_id ) {
                                        $image_link = wp_get_attachment_url( $attachment_id );
                                        ?>
                                        <li class="splide__slide">
                                            <img src="<?php echo $image_link; ?>" alt="<?php echo get_the_title($id);?>">
                                    </li>
                                    <?php
                                    }
                                ?>
                        </ul>
                    </div>
                </div>
                <ul id="thumbnails" class="thumbnails">
                    <li class="thumbnail">
                        <img src="<?php echo $mainimg; ?>" alt="<?php echo get_the_title($id);?>">
                    </li>
                        <?php
                        foreach( $attachment_ids as $attachment_id ) {
                        $image_link = wp_get_attachment_url( $attachment_id ); ?>
                        <li class="thumbnail">
                        <img src="<?php echo $image_link; ?>" alt="<?php echo get_the_title($id);?>">
                        </li>
                        <?php } ?>
                </ul>
            </div>
            <div class="right">
                <div class="title-wrapper">
                    <h2 class="title"><?php echo get_the_title($id); ?></h2>
                    <div class="price">
                        <?php
                            if($saleprice) { ?>
                                <p class="saleprice"><?php echo $saleprice; ?></p><span class="regularprice"><?php echo $regprice;?></span>
                            <?php
                            } else {
                                ?>
                                <p class="salesprice"><?php echo $regprice; ?></p> <?php
                            }
                        ?>
                    </div>      
                </div>
                <div class="add-to-cart-wrapper">
                    <?php
                    setup_postdata( $id );
                    wc_get_template( 'single-product/add-to-cart/simple.php' );
                    wp_reset_postdata();
                    ?>
                </div>
                
                    <?php 
                    if(have_rows('usp')) : ?>
                    <div class="usps"> <?php
                        while(have_rows('usp')) : the_row(); ?>
                            <div class="usp">
                               <div class="left">
                                    <img src="<?php echo the_sub_field('icon'); ?>">
                               </div>
                               <div class="right">
                                <p class="title"><?php echo the_sub_field('title'); ?></p>
                                <?php echo the_sub_field('content'); ?>
                               </div>
                            </div>
                        <?php endwhile;
                        ?> </div> <?php
                    endif; ?>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>



    