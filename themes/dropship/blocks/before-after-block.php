<section class="before-after-block">
    <div class="container">
        <div class="before-after-wrapper">
            <div class="column beer-slider">
            <div id="before-after" class="beer-slider" data-beer-label="<?php echo the_field('before_text'); ?>">
                <img src="<?php echo the_field('before_image');?>" alt="">
                <div class="beer-reveal" data-beer-label="<?php echo the_field('after_text'); ?>">
                    <img src="<?php echo the_field('after_image');?>" alt="">
                </div>
                </div>
            </div>
            <div class="column">
                <p class="pretitle"><?php echo the_field('pretitle'); ?></p>
                <p class="title"><?php echo the_field('title'); ?></p>
                <?php echo the_field('subtitle'); ?>
                <a style="border-radius:<?php echo the_field('button_border_radius','theme-settings'); ?>px;background-color:<?php echo the_field('primary_color','theme-settings'); ?>" class="btn-primary" href="<?php echo the_field('button_link');?>"><?php echo the_field('button_text'); ?></a>
            </div>

        </div>
    </div>
</section>