<?php
$class = '';
if(get_field('center_text')) {
    $class = 'center';
}

$id = get_field('select_product');
if( $id ): ?>
<section class="reviews-block">
    <div class="container">
        <p class="title <?php echo $class; ?>"><?php echo the_field('title'); ?></p>
        <p class="subtitle <?php echo $class; ?>"><?php echo the_field('subtitle'); ?></p>
        <div class="reviews">
            <?php
            $product = wc_get_product($id);
            $comments = get_comments( $id );
            wp_list_comments( array( 'callback' => 'woocommerce_comments' ), $comments);
            ?>
        </div>
    </div>
</section>
<?php endif;