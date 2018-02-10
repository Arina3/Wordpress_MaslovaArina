<?php
/**
 *  Template part for displaying Concert posts
 */

?>


<section class="upcoming-conserts-posts">
    <div class="upcoming-consert-details">
        <div class="consert-image">
            <a href="<?php the_permalink(); ?>" class="consert-image-link" target="_self">
                <img src="<?php the_field('concert_image'); ?>" alt="Texas Rock Nation 2016" title="Texas Rock Nation 2016">
                <div class="concert-date">
                    <p class="date-number"><?php the_field('concert_date_on_image') ?></p>
                    <p class="date-month"><?php the_field('concert_month_on_image') ?></p>
                </div>
            </a>
        </div>
        <div class="consert-details">
            <h4 class="consert-details-heading"><?php the_field('concert_title'); ?></h4>
            <?php the_field('table'); ?>

            <a href="#" class="purchase-link-section" target="_blank"><?php the_field('purchase_button') ?></a>
        </div>
    </div>
    <div class="progress-bar-upcoming">
        <div class="progress-bar-string"></div>
    </div>
</section>