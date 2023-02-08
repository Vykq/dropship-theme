<?php
    $class = '';
    if(get_field('center_titles')) {
        $class = 'center';
    }

    $subclass = '';
    if(get_field('center_sub')) {
        $subclass = 'center';
    }
    ?>

<section class="three-columns-block">
    <div class="container">
        <div class="three-columns-wrapper">
        <?php if(get_field('image1') || get_field('title1') || get_field('subtitle1')) : ?>
            <div class="column first <?php echo $class; ?>">
                <?php if(get_field('image1')) : ?>
                    <img src="<?php echo the_field('image1'); ?>">
                <?php endif; ?>

                <?php if(get_field('title1')) : ?>
                    <p class="title"><?php echo the_field('title1'); ?></p>
                <?php endif; ?>

                <?php if(get_field('subtitle1')) : ?>
                    <?php echo the_field('subtitle1'); ?>
                <?php endif; ?>

            </div>
            <?php endif; ?>
            <?php if(get_field('image2') || get_field('title2') || get_field('subtitle2')) : ?>
                <div class="column second <?php echo $class; ?>">
                <?php if(get_field('image2')) : ?>
                        <img src="<?php echo the_field('image2'); ?>">
                        <?php endif; ?>
                    <?php if(get_field('title2')) : ?>
                        <p class="title"><?php echo the_field('title2'); ?></p>
                    <?php endif; ?>
                    <?php if(get_field('subtitle2')) : ?>
                        <?php echo the_field('subtitle2'); ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if(get_field('image3') || get_field('title3') || get_field('subtitle3')) : ?>
                <div class="column third <?php echo $class; ?>">
                <?php if(get_field('image3')) : ?>
                    <img src="<?php echo the_field('image3'); ?>">
                    <?php endif; ?>
                    <?php if(get_field('title3')) : ?>
                        <p class="title"><?php echo the_field('title3'); ?></p>
                    <?php endif; ?>
                    <?php if(get_field('subtitle3')) : ?>
                        <?php echo the_field('subtitle3'); ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>