<?php
/*
 * Template Name: Contact
 * Description: Contact page template
 */
 get_header() ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="page-heading"><?php the_title(); ?> Details</h1>
        <div class="entry page-content-container">
            <div class="container-fluid">
                <div class="contact-page-main-content">
                    <div class="row serv1">
                        <div class="col-lg-6 left-side">
                            <p>Please contact us, if you have any questions. We will be happy to accomodate your concerns and assist you with anything you may need.</p>
                        </div>
                        <div id="cracow-pic" class="col-lg-6"> <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/cracow.jpg" alt="cracow"> </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 left-side" id="crusoe-form"> <?php echo do_shortcode( '[contact-form-7 id="1327" title="Formularz 1"]' ); ?> </div>
                        <div class="col-lg-6" id="cruap-container-wrapper">
                            <div id="cruap-container" class="cruap">
                                <h2>Crusoe Apartments</h2>
                                <p><a href="mailto:info@crusoe.info">info@crusoe.info</a></p>
                                <p>Tel: +48 500 503 888</p>
                            </div>
                            <div class="crusoe-logo cruap"> <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/crusoelogo.png" alt="crusoe"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
            <?php endif; ?>
                <?php get_footer() ?>
                    <?php the_content(); ?>