<?php
    $class = '';
    if(get_field('top_margin')) {
        $class = 'top-margin';
    }

    if(get_field('bot_margin')) {
        $class = 'bot-margin';
    }


    if(get_field('top_margin') && get_field('bot_margin')) {
        $class = 'margins'; 
    }
?>
<section class="heading-block <?php echo $class; ?>">
    <div class="container">
        <p class="title"><?php echo the_field('title'); ?></p>
    </div>
</section>