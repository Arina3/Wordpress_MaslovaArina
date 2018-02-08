<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Let`s_Rock
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="container-bottom">
        <nav class="menu-bar-footer">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-nav-menu',
                'container_class' => 'footer-menu-class',
                'menu_id' => 'footer-menu',
            ));
            ?>
        </nav>
        <?php echo get_theme_mod('footer_copy') ?>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>




