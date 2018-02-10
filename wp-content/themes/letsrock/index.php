<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Let`s_Rock
 */

get_header(); ?>

    <section class="members-section clearfix">
        <div class="container-main">
            <div class="heading">
                <a href="<?php echo get_theme_mod('members_url'); ?>">
                    <h2 class="second-heading"><?php echo get_theme_mod('members_heading'); ?>
                        <span class="third-heading">
                            <?php echo get_theme_mod('members_subheading'); ?>
                        </span>
                    </h2>
                </a>
            </div>
            <div class="custom-navigation">
                <ul class="custom-arrows-introducing">
                    <li>
                        <a href="#" class="flex-prev">
                            <i class="fa fa-chevron-left" aria-hidden="true" title="previous"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex-next">
                            <i class="fa fa-chevron-right" aria-hidden="true" title="next"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <?php
            $args = array(
                'post_type' => 'members',
                'posts_per_page' => 9,
            );

            $the_members = new WP_Query($args); ?>
            <?php if ($the_members->have_posts()) : ?>

            <div class="flexslider2 clearfix">
                <ul class="slides">

                    <?php while ($the_members->have_posts()) : $the_members->the_post(); ?>

                        <li class="member">
                            <a href="<?php the_permalink(); ?>" class="member-link" target="_self">
                                <img src="<?php the_field('image'); ?>" alt="Jone Smith" class="member-image">
                                <div class="member-desc">
                                    <h4 class="member-name"><?php the_field('name'); ?></h4>
                                    <p class="member-genre"><?php the_field('position'); ?></p>
                                    <ul class="socials-items members">
                                        <li class="socials-popup">
                                            <a href="#" class="socials-link" target="_blank">
                                                <i class="fa fa-facebook" aria-hidden="true" title="facebook">
                                    <span class="like-number">
                                        <?php the_field('member-facebook'); ?>
                                    </span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="socials-popup">
                                            <a href="#" class="socials-link" target="_blank">
                                                <i class="fa fa-twitter" aria-hidden="true" title="twitter">
                                    <span class="like-number">
                                        <?php the_field('member-twitter'); ?>
                                    </span>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="socials-popup">
                                            <a href="#" class="socials-link" target="_blank">
                                                <i class="fa fa-google-plus" aria-hidden="true" title="google-plus">
                                    <span class="like-number">
                                        <?php the_field('member-google-plus'); ?>
                                    </span>
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
    </section>
    <section class="upcoming-latest">
        <div class="container-main upcoming">
            <section class="upcoming-conserts">
                <div class="heading">
                    <a href="<?php echo get_theme_mod('concerts_url'); ?>">
                        <h2 class="second-heading">
                            <?php echo get_theme_mod('concerts_heading'); ?>
                            <span class="third-heading">
                        <?php echo get_theme_mod('concerts_subheading'); ?>
                    </span>
                        </h2>
                    </a>
                </div>
                <div class="upcoming-consert-details">
                    <div class="consert-image">

                        <?php
                        $args = array(
                            'post_type' => 'concerts',
                            'posts_per_page' => 1,
                        );

                        $the_concerts = new WP_Query($args); ?>
                        <?php if ($the_concerts->have_posts()) : ?>

                        <?php while ($the_concerts->have_posts()) :
                        $the_concerts->the_post(); ?>

                        <a href="<?php the_permalink(); ?>" class="consert-image-link" target="_self">
                            <img src="<?php the_field('concert_image'); ?>" alt="Texas Rock Nation 2016"
                                 title="Texas Rock Nation 2016">
                            <div class="concert-date">
                                <p class="date-number"><?php the_field('concert_date_on_image') ?></p>
                                <p class="date-month"><?php the_field('concert_month_on_image') ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="consert-details">
                        <h4 class="consert-details-heading"><?php the_field('concert_title'); ?></h4>
                        <?php the_field('table'); ?>

                        <a href="#" class="purchase-link-section"
                           target="_blank"><?php the_field('purchase_button') ?></a>
                    </div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <?php endif; ?>
                <div class="progress-bar-upcoming">
                    <div class="progress-bar-string"></div>
                </div>
            </section>

            <section class="latest-video">
                <div class="heading">
                    <a href="<?php echo get_theme_mod('videos_url'); ?>">
                        <h2 class="second-heading">
                            <?php echo get_theme_mod('videos_heading'); ?>
                            <span class="third-heading">
                    <?php echo get_theme_mod('videos_subheading'); ?>
                </span>
                        </h2>
                    </a>
                </div>
                <div class="custom-navigation">
                    <ul class="custom-arrows-video">
                        <li>
                            <a href="#" class="flex-prev">
                                <i class="fa fa-chevron-left" aria-hidden="true" title="previous"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex-next">
                                <i class="fa fa-chevron-right" aria-hidden="true" title="next"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php
                $args = array(
                    'post_type' => 'videos'
                );

                $the_video = new WP_Query($args); ?>

                <?php if ($the_video->have_posts()) : ?>
                    <div class="flexslider3">
                        <ul class="slides">

                            <?php while ($the_video->have_posts()) : $the_video->the_post(); ?>

                                <li>
                                    <?php the_field('video') ?>
                                </li>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </section>
        </div>
    </section>

    <section class="founder" id="learn-more-popup">
        <div class="container-main">
            <p class="cantus-founder">
                <img src="<?php echo get_theme_mod('founder_image'); ?>" alt="Cantus founder 1982"
                     class="cantus-founder-image">
            </p>
            <div class="container-founder">
                <h2 class="section-heading"><?php echo get_theme_mod('founder_heading'); ?></h2>
                <p class="section-desc">
                    <?php echo get_theme_mod('founder_desc'); ?>
                </p>
                <a href="<?php echo get_theme_mod('founder_popup_url'); ?>" class="learn-more-link"
                   target="_self"><?php echo get_theme_mod('founder_popup_button'); ?></a>
                <div class="popup">
                    <div class="popup-block">
                        <h5><?php echo get_theme_mod('popup_heading'); ?></h5>
                        <p><?php echo get_theme_mod('popup_desc'); ?></p>
                        <a href="<?php echo get_theme_mod('close_popup_url'); ?>"
                           class="close-popup-link"><?php echo get_theme_mod('close_popup'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();



