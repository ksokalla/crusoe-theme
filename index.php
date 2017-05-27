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
	            <div class="icons"><i class="fa fa-wifi" aria-hidden="true"></i></div>
	            <div class="icons"><span class="glyphicon glyphicon-lamp" aria-hidden="true"></span></div>
	            <div class="icons"></div>
	            <div class="icons"></div>
	            <div class="icons"></div>
	        </div>
	    </div>
	</section>
	
	<!---------icon bar end-------->
 
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
	


