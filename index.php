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
	        <div class="row">
	            <div class="icons">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/wifi.ico" alt="wifi"></img>
	                <p>Free WiFi</p>
	            </div>
	            <div class="icons">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/lamp.ico" alt="lamp"></img>
	                <p>Fully Furnished</p>
	            </div>
	            <div class="icons">
                    <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/coffee.ico" alt="coffee"></img>
                    <p>Breakfast</p>
                </div>
	            <div class="icons">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/cocktail.ico" alt="cocktail"></img>
	                <p>Free Drinks &amp; Snacks</p>
	            </div>
	            <div class="icons">
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/icons/broom.ico" alt="broom"></img>
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
	<section id="pros">
	    <div class="container-fluid">
	        <div class="row">
	            <h2>Why book with us</h2>
	            <li>
	                <ul>3 minutes walking distance to Main Square</ul>
	                <ul>5 minutes walking distance to Wawel</ul>
	                <ul>public transportation in front of the building</ul>
	                <ul>historic district </ul>
	                <ul>breakfast included </ul>
	                <ul>complimentary drinks and snacks</ul>
	                <ul>free WiFi + free WiFi To Go</ul>
	            </li>
	        </div>
	        <div class="row">
	            <div>
	                <img src="http://localhost/blog_projekt/wp-content/themes/crusoe theme/img/crusoelogo.png" alt="">
	            </div>
	        </div>
	        <div class="row">
	            
	        </div>
	    </div>
	</section>
 
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
	


