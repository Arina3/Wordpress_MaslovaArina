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
                        <a href="<?php echo get_theme_mod('close_popup_url'); ?>" class="close-popup-link"><?php echo get_theme_mod('close_popup'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();



