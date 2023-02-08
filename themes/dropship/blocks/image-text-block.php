<?php
$class = '';

if(get_field('direction') == 'it') {
    $class="img-left";
} else {
    $class="img-right";
}

?>

<section class="image-text-block">
    <div class="container">
        <div class="image-text-wrapper <?php echo $class; ?>">
            <?php if(get_field('image')) : ?>
            <div class="column">
                <img src="<?php echo the_field('image');?>">
            </div>
            <?php endif; ?>
            <?php if(get_field('pre_title') || get_field('title') || get_field('subtitle')) : ?>
            <div class="column">
            <?php if(get_field('pre_title')) : ?>
                    <p class="pretitle"><?php echo the_field('pre_title'); ?></p>
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