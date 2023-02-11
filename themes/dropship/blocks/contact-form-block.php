<?php
$fields = get_field('fields');
?>
<section class="contact-form-block">
    <div class="container">
        <div class="form-wrapper">
            <form class="contacts-form" data-file="false">
                <?php
                    if( $fields && in_array('name', $fields) ) {
                        ?> <input type="text" name="name" id="name" placeholder="Your name" /> <?php
                    }

                    if( $fields && in_array('email', $fields) ) {
                        ?> <input type="text" name="email" id="email" placeholder="Your email" /> <?php
                    }

                    if( $fields && in_array('phone', $fields) ) {
                        ?> <input type="text" name="phone" id="phone" placeholder="Your phone" /> <?php
                    }

                    if( $fields && in_array('text', $fields) ) {
                        ?> <input type="text" id="message" name="message" placeholder="Your message" /> <?php
                    } ?>
                    <p class="error-msg" id="input-msg"></p>
                    <button class="submit-form" type="submit">
                        Send message
                    </button>
                    <p class="form-msg"></p>
            </form>
        </div>
    </div>
</section>