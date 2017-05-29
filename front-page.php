<?php 
/*
 * Template Name: Home
 * Description: Home page template
 */

get_header() ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
            <?php endif; ?>
                <?php get_footer() ?>