<?php
/**
 * Template name: Members
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
                $args = array(
                    'post_type' => 'members'
                );

                $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : while ($the_query->have_posts() ) :$the_query->the_post();?>
            <h2><a href="<?php the_permalink(); ?>" class="member-link" ><?php the_title(); ?></a></h2>
            <h4 class="member-name"><?php the_field('name'); ?></h4>
            <?php the_excerpt(); ?>


            <?php endwhile; ?>
            <?php endif; ?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
