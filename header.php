<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="https://blog.harbournet.cn/wp-content/themes/svtheme/assets/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="https://blog.harbournet.cn/wp-content/themes/svtheme/assets/css/font-awesome.min.css">
	<?php wp_head(); ?>


	<!-- 评论框随机文字 -->
	</script>
	<script>
		  $.getJSON("https://api.yum6.cn/yan.php?format=json",function(data){ 
		  		$("#comment").attr({
		  			"placeholder":data.text
		  		});
		  });
	</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header id="header" class="header bg-white">		
	 	<div class="navbar-container2">
	        <a href="<?php bloginfo('url');?>" class="navbar-logo" style="color:#eb5055">
	    		<?php bloginfo('name');?>
	        </a>


<nav id="site-navigation" class="main-navigation" role="navigation" style="float: right;margin-right:2em;">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

	
</nav><!-- #site-navigation -->














	    </div>
	</header><!-- #masthead -->


	<?php
	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	/*if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;*/
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
