<?php get_header() ?>


	
<!--------slider start-------->
<section id="slider">
	<div class="slidersokalla">
	  <div><img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/1.jpg" alt="room"></div>
	  <div><img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/2.jpg" alt="room2"></div>
	  <div><img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/15.jpg" alt="room3"></div>
	  <div><img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/2.jpg" alt="room3"></div>
	  <div><img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/3.jpg" alt="room3"></div>
	  <div><img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/4.jpg" alt="room3"></div>
	</div>
</section>
	
	
	<!---------slider end-------->
	<!---------icon bar start-------->
	
	<section id="icon-bar">
	    <div class="container-fluid">
	        <div>
	            <div class="icons">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/wifi.ico" alt="wifi">
	                <p>Free WiFi</p>
	            </div>
	            <div class="icons">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/lamp.ico" alt="lamp">
	                <p>Fully Furnished</p>
	            </div>
	            <div class="icons">
                    <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/coffee.ico" alt="coffee">
                    <p>Breakfast</p>
                </div>
	            <div class="icons">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/cocktail.ico" alt="cocktail">
	                <p>Free Drinks &amp; Snacks</p>
	            </div>
	            <div class="icons">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/broom.ico" alt="broom">
	                <p>Cleaning Services</p>                
	            </div>
	        </div>
	    </div>
	</section>
	
	<!---------icon bar end-------->
	<!---------about-homepage start-------->
	<section id="about-homepage">
	    <div id="about-homepage-content">
	        <h1>We provide the best first class luxury apartments in Kraków</h1>
	        <p>Freshly renovated spacious apartment situated in the center of the historic district in Krakow. The Crusoe apartment combines fine modern furnishings and state of the art appliances with the special historical features of original 19th century brick walls and uniquely patterned ceramic tiles floors, which makes staying at Crusoe apartment one of a kind extraordinary experience.
	        </p>
	        <p>Crusoe apartment easily accommodates 4 adults and it is located on the second floor of the beautifully renovated historical building on Pilsudski Street within walking distance to the Market Square, Wawel Castle, major restaurants and vibrant nightlife.
            There is public transportation right in front of the building and there is an elevator in the building. The apartment has 55 square meters and consists of large living room with the 47” TV and sleeping sofa for 2 adults, bedroom with queen size bed, luxurious bathroom with bidet, rain shower and bath essentials and fully equipped kitchen.  
            We offer complimentary mineral water, tea, coffee, beer, snacks and fresh fruit.  We also welcome our guests with a high quality bottle of wine.  In addition, we provide free delicious breakfast that is served at the charming Café Bon Jour located 2 doors down from the apartment building.
            </p>
	    </div>
	</section>
	
	
	<!---------about-homepage end-------->
	<!---------pros start---------------->
	<section id="pros">
	    <div class="container-fluid">
	        <div class="row pros-items">
                <div class="pros-item">
                    <h2>Why book with us</h2>
                    <ul id="pros-list">
                        <li>3 minutes walking distance to Main Square</li>
                        <li>5 minutes walking distance to Wawel</li>
                        <li>public transportation in front of the building</li>
                        <li>historic district </li>
                        <li>breakfast included </li>
                        <li>complimentary drinks and snacks</li>
                        <li>free WiFi + free WiFi To Go</li>
                    </ul>
	            </div>
	            <div class="pros-item crusoe-logo">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/crusoelogo.png" alt="">
	            </div>
	            <div class="pros-item">
	                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.3844471868947!2d19.928513214997096!3d50.06036142327752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b0c617a299f%3A0xe3664c11562aaf78!2sCrusoe+Apartamenty!5e0!3m2!1spl!2spl!4v1495902375856" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	            </div>
	        </div>
	    </div>
	</section>
    
    <!---------pros end----------------->
    <!---------opinions-partners start----------------->
    
    <section id="opinions-partners">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6" id="opinions">
                    <h2>People say the nicest things…</h2>
                    <p>"Absolutely gorgous apartament, new and beautiful, great location, central but quiet... and the best is the wi-fi to go!"
                    <p class="author">Mike and Anna</p>
                    <p>"Wunderschön, beste Lage, gross und alles neu renviert. Super WiFi, Kühlschrank voll mit Getränken und sogar eine excelente Flasche Wein als Gastgeschenk..... einfach PERFEKT! Vielen Dank"
                    <p class="author">Peter mit Famile</p>
                    <p>“Perfect place to stay! Walking distance to Main Square. Best breakfast ever!"
                    <p class="author">Maria and Stan</p> 
                    </p>
                </div>
                <div id="partners" class="col-lg-6 col-md-6">
                    <div><img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/bonjour-cava.png" alt="bonjour-cava">
                    </div>
                    <div>
                    <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/anioly.gif" alt="anioly">    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!---------opinions-partners end----------------->
    
    
<?php if( have_posts() ) : ?>
	<?php while( have_posts() ) : the_post() ?>
		<h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
		<div class="content">
			<?php the_content() ?>
		</div>
	<?php endwhile ?>
<?php else : ?>
	<p>Oh No, there are no posts!</p>
<?php endif ?>


<?php get_footer() ?>
	


