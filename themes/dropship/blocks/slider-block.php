<?php
$class = "";
if(have_rows('sliders')) : ?>

<section class="slider">
    <section class="splide" aria-label="Slider">

    <div class="splide__track">
            <ul class="splide__list"> <?php
                while(have_rows('sliders')) : the_row();
                    if(get_sub_field('content_placement') == 'left') {
                        $class = "left-align";
                    } else if (get_sub_field('content_placement') == 'center') {
                        $class = "center-align";
                    } else {
                        $class = "right-align";
                    } ?>
                    
                <li class="splide__slide hero-slider-image <?php echo $class; ?>" style="background-image:url(<?php echo the_sub_field('slider_image'); ?>)">
                    <div class="slider-content">
                        <h1 class="hero-title" style="color:<?php echo the_sub_field('slider_text_color'); ?>"><?php echo the_sub_field('slider_main_text'); ?></h1>
                        <p class="hero-subtitle" style="color:<?php echo the_sub_field('slider_text_color'); ?>"><?php echo the_sub_field('slider_sub_text'); ?></p>
                        <a href="<?php echo the_sub_field('slider_button_link');?>" class="btn-primary hero-button" style="border-radius:<?php echo the_field('button_border_radius','theme-settings'); ?>px;color:<?php echo the_sub_field('slider_button_text_color'); ?> ;background-color:<?php echo the_sub_field('slider_button_color'); ?>"><?php echo the_sub_field('slider_button_text'); ?></a>
                    </div>
                </li>

                <?php endwhile; ?>
            </ul>
    </div>
    </section>
</section>

<?php endif;
?>