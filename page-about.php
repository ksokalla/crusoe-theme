<?php
/*
 * Template Name: About
 * Description: About side template
 */
 get_header() ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="page-heading"><?php the_title(); ?></h1>
        <div class="entry page-content-container">
            <p class="page-main-content">We provide fully furnished, high-end apartaments for affordable price. You can rely on us to find you a perfect place to call home during your stay in Krakow. Our goal is to provide you with an outstanding experience and make your stay unforgettable. </p> <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/about.jpg" alt="about">
            <div class="container-fluid">
                <h1>Services</h1>
                <div class="row serv1">
                    <div id="services-lists">
                        <div class="services-list col-lg-4 col-md-4">
                            <h2>Communication and entertainment:</h2>
                            <ul>
                                <li>Free WiFi</li>
                                <li>WiFi To GO</li>
                                <li>LCD TV 47"</li>
                                <li>International satellite TV</li>
                            </ul>
                        </div>
                        <div class="services-list col-lg-4 col-md-4">
                            <h2>A bit more service:</h2>
                            <ul>
                                <li>Free Drinks: wine, beer, water, tee, coffee</li>
                                <li>Free snacks</li>
                                <li>Hairdryer, cosmetics</li>
                                <li>Bed sheets and towels</li>
                                <li>Airport shuttle</li>
                                <li>Vespa Piagio Rental offer </li>
                            </ul>
                        </div>
                        <div class="services-list col-lg-4 col-md-4">
                            <h2>Kitchen:</h2>
                            <ul>
                                <li>Fridge</li>
                                <li>Multifunctional oven</li>
                                <li>Toaster, electric kettle & coffee maker</li>
                                <li>Dishwasher</li>
                                <li>Comprehensive set of cutlery, dishes, glasses</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
            <?php endif; ?>
                <?php get_footer() ?>