<?php
/**
 * Template name: Member
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'post_type' => 'members',
                'show_all' => false, // показаны все страницы участвующие в пагинации
                'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                'prev_text' => __('« Previous'),
                'next_text' => __('Next »'),
                'screen_reader_text' => __('Posts navigation'),
                'posts_per_page' => 3,
                'paged' => $paged,
            );

            $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : while ($the_query->have_posts() ) : $the_query->the_post();

                get_template_part( 'template-parts/content', 'member' );

            endwhile;
                the_posts_pagination($args);
            ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
