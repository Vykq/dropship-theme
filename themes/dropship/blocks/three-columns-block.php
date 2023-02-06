<section class="three-columns-block">
    <div class="container">
        <div class="three-columns-wrapper">
            <div class="column first">
                <img src="<?php echo the_field('image1'); ?>">
                <p class="title"><?php echo the_field('title1'); ?></p>
                <?php echo the_field('subtitle1'); ?>
            </div>
            <div class="column second">
                <img src="<?php echo the_field('image2'); ?>">
                <p class="title"><?php echo the_field('title2'); ?></p>
                <?php echo the_field('subtitle2'); ?>
            </div>
            <div class="column third">
                <img src="<?php echo the_field('image3'); ?>">
                <p class="title"><?php echo the_field('title3'); ?></p>
                <?php echo the_field('subtitle3'); ?>
            </div>
        </div>
    </div>
</section>