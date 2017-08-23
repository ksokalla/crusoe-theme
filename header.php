<?php
/**
 * The header for our theme
 *
 * 
 */

?>


<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crusoe Apartments</title>
	<?php wp_head(); ?>
</head>
<body>
	<!---------header start---------->
<section id="header">
	<div class="container-fluid">
		<div class='row'>
			<div id="header-top-bar">
				<div id="padding-mod" class="col-lg-4 col-sm-6">
					<h3><span><a href="<?php bloginfo('url'); ?>">Crusoe</a></span></h3> </div>
				<div id="margin-mod" class="col-lg-4 col-sm-6">
					<h3 id="blog-info-text"><?php bloginfo('description'); ?></h3> </div>
				<div class="col-lg-4 col-sm-6">
				<ul>
					<li><a href="mailto:info@crusoe.info">info@crusoe.info</a></li>
					<li>+48 500 503 888</li>
					<li><button id="header-button" class="btn-default"><a href="http://www.crusoe-apartamenty-krakow.com/pl/apartamenty/">Book now</a></button></li>
				</ul>
				</div>
				
			</div>
		</div>
	</div>
</section>
	<!---------header end---------->
	<!---------navbar start-------->
	
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if (function_exists(RolandMenu()))RolandMenu(); ?>
        <li class="non-hover"><a href="https://www.facebook.com/Crusoeapartamenty" id="fb" target="_blank" class="non-hover"><i class="fa fa-facebook non-hover" aria-hidden="true"></i></a></li>
        <li class="non-hover"><a href="https://www.instagram.com/crusoe_travel/" id="ig" target="_blank" class="non-hover"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</nav>
<!---------navbar end-------->