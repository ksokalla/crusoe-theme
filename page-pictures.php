<?php
/*
 * Template Name: Pictures
 * Description: Pictures page template
 */
 get_header() ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="page-heading"><?php the_title(); ?></h1>
        <div class="entry page-content-container">
           <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
            <?php endif; ?>
                <?php get_footer() ?>