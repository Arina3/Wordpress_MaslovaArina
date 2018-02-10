<?php
/**
 * Template part for displaying Members posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Let`s_Rock
 */

?>

<section class="members-section clearfix">
    <div class="container-main">
        <div class="clearfix">
            <ul class="member-list">
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
            </ul>
        </div>
    </div>
</section>






