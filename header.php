<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="style.min.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/twentyseventeen/assets/css/font-awesome.min.css">

	<!--表情包-->
    <link rel="stylesheet" href="wp-content/themes/twentyseventeen/jQuery-emoji-master/dist/css/jquery.emoji.css"/>
    <link rel="stylesheet" href="wp-content/themes/twentyseventeen/jQuery-emoji-master/lib/css/railscasts.css"/>
    <link rel="stylesheet" href="wp-content/themes/twentyseventeen/jQuery-emoji-master/dist/css/index.css"/>


	<?php wp_head(); ?>
</head>

<!-- 表情包 -->	
<script>
    window.onload=function(){
    	//评论表情包解析
        $(".comment-content").emojiParse({
            basePath: 'wp-content/themes/twentyseventeen/jQuery-emoji-master/images/emoji',
            icons: emojiLists   // 注：详见 js/emoji.list.js
        });
        //表情包框的显示
        $("textarea#comment").emoji({
            showTab: true,
            animation: 'fade',
            basePath: 'wp-content/themes/twentyseventeen/jQuery-emoji-master/images/emoji',
            icons: emojiLists   // 注：详见 js/emoji.list.js
        });	
  	}
</script>
<!--表情包结束-->
	





<!-- 评论框随机文字 -->
	<script src="http://localhost:88/wordpress/wp-content/themes/twentyseventeen/assets/js/jquery-3.3.1.min.js">
	</script>
	<script>
		  $.getJSON("https://api.yum6.cn/yan.php?format=json",function(data){ 
		  		$("#comment").attr({
		  			"placeholder":data.text
		  		});
		  });
	</script>


<body <?php body_class(); ?>>

<div id="page" class="site">
	<header id="header" class="header bg-white">		
	 	<div class="navbar-container2">
	        <a href="<?php bloginfo('url');?>" class="navbar-logo" >
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
