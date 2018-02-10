<?php
/**
 * Template name: Member
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $args = [
                'post_type' => 'members',
                'show_all'     => false, // показаны все страницы участвующие в пагинации
                'end_size'     => 1,     // количество страниц на концах
                'mid_size'     => 1,     // количество страниц вокруг текущей
                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                'prev_text'    => __('« Previous'),
                'next_text'    => __('Next »'),
                'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                'screen_reader_text' => __( 'Posts navigation' ),
                'posts_per_page' => 3,
                'paged' => $paged
            ];

            query_posts($args);

            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'member' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.

            the_posts_pagination($args);
            ?>

            <?php wp_reset_postdata(); ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
