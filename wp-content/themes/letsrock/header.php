<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Let`s_Rock
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans|Oswald:400,500" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
    <div class="site-branding">
        <div class="container-header">
            <nav id="site-navigation" class="main-navigation">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-nav-menu',
                    'container_class' => 'custom-menu-class',
                    'menu_id' => 'primary-menu',
                ));
                ?>
            </nav>
            <div class="logo-block">
                <a href="#" target="_self" class="logo-link">
                    <?php the_custom_logo(); ?>
                </a>
            </div>
            <nav class="socials-bar">
                <ul class="socials-items">
                    <li class="socials">
                        <a href="<?php echo get_theme_mod('social_facebook'); ?>" class="socials-link" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true" title="facebook">
                                <span class="like-number">
                                    <?php echo get_theme_mod('facebook_likes'); ?>
                                </span>
                            </i>
                        </a>
                    </li>
                    <li class="socials">
                        <a href="<?php echo get_theme_mod('social_twitter'); ?>" class="socials-link" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true" title="twitter">
                                <span class="like-number">
                                    <?php echo get_theme_mod('twitter_likes'); ?>
                                </span>
                            </i>
                        </a>
                    </li>
                    <li class="socials">
                        <a href="<?php echo get_theme_mod('social_googleplus'); ?>" class="socials-link"
                           target="_blank">
                            <i class="fa fa-google-plus" aria-hidden="true" title="google-plus">
                                <span class="like-number">
                                    <?php echo get_theme_mod('googleplus_likes'); ?>
                                </span>
                            </i>
                        </a>
                    </li>
                    <li class="purchase">
                        <a href="<?php echo get_theme_mod('header_button_url'); ?>" class="purchase-link-header"
                           target="_blank"><?php echo get_theme_mod('header_button_name'); ?></a>
                    </li>
                </ul>
            </nav>
        </div>
</header>
<section class="main-background clearfix">
    <?php echo do_shortcode('[metaslider id="267"]'); ?>
    <div class="container-background">
        <h1 class="main-heading"><?php echo get_theme_mod('header_heading'); ?>
            <span class="subheading">
                <?php echo get_theme_mod('header_subheading'); ?>
            </span>
        </h1>
        <a href="<?php echo get_theme_mod('header_url'); ?>" class="discover-link"
           target="_self"><?php echo get_theme_mod('header_button'); ?></a>
    </div>
    <div class="progress-bar-container">
        <div class="progress-bar"></div>
</section>







