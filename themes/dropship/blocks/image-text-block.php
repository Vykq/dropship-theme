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
            <div class="column">
                <img src="<?php echo the_field('image');?>">
            </div>
            <div class="column">
                <p class="pretitle"><?php echo the_field('pre_title'); ?></p>
                <p class="title"><?php echo the_field('title'); ?></p>
                <?php echo the_field('subtitle'); ?>
                <a style="border-radius:<?php echo the_field('button_border_radius','theme-settings'); ?>px;background-color:<?php echo the_field('primary_color','theme-settings'); ?>" class="btn-primary" href="<?php echo the_field('button_link');?>"><?php echo the_field('button_text'); ?></a>
            </div>

        </div>
    </div>
</section>