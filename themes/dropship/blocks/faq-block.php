<section class="faq-block">
    <div class="container">
        <div class="text-container">
            <p class="title"><?php echo the_field('title'); ?></p>
            <?php echo the_field('subtitle'); ?>
        </div>
        <div class="faqs">
        <?php
        $featured_posts = get_field('faq');
        if( $featured_posts ): ?>
                <?php foreach( $featured_posts as $featured_post ):
                    $question = get_the_title( $featured_post->ID );
                    $answer = get_field('answer',$featured_post->ID);
                    ?>
                    <button class="faqaccordion"><p class="faqquestion"><?php echo $question; ?></p>
                        <svg id="faqchevron" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                            <g id="Group_621" data-name="Group 621" transform="translate(-1529.5 -6805.5)">
                                <line id="Line_16" data-name="Line 16" x2="18" transform="translate(1531 6816)" fill="none" stroke="#848484" stroke-linecap="round" stroke-width="3"/>
                                <line id="Line_17" data-name="Line 17" x2="18" transform="translate(1540 6807) rotate(90)" fill="none" stroke="#848484" stroke-linecap="round" stroke-width="3"/>
                            </g>
                        </svg>
                    </button>
                    <div class="faqpanel">
                        <div class="faqats">
                        <?php echo $answer; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
    
        <?php endif; ?>
        </div>
    </div>
</section>
