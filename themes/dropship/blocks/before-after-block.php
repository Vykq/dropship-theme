<section class="before-after-block">
    <div class="container">
        <div class="before-after-wrapper">
        <?php if(get_field('before_image') && get_field('after_image')) : ?>
            <div class="column beer-slider">
            <div id="before-after" class="beer-slider" data-beer-label="<?php echo the_field('before_text'); ?>">
                <img src="<?php echo the_field('before_image');?>" alt="">
                <div class="beer-reveal" data-beer-label="<?php echo the_field('after_text'); ?>">
                    <img src="<?php echo the_field('after_image');?>" alt="">
                </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if(get_field('pretitle') || get_field('title') || get_field('subtitle')) : ?>
            <div class="column">
                <?php if(get_field('pretitle')) : ?>
                    <p class="pretitle"><?php echo the_field('pretitle'); ?></p>
                <?php endif; ?>        
                <?php if(get_field('title')) : ?>
                    <p class="title"><?php echo the_field('title'); ?></p>
                <?php endif; ?>
                <?php if(get_field('subtitle')) : ?>
                    <?php echo the_field('subtitle'); ?>
                <?php endif; ?>
                <?php if(get_field('button_text')) : ?>
                    <a style="border-radius:<?php echo the_field('button_border_radius','theme-settings'); ?>px;background-color:<?php echo the_field('primary_color','theme-settings'); ?>" class="btn-primary" href="<?php echo the_field('button_link');?>"><?php echo the_field('button_text'); ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>