<?php
/**
 * The template for displaying all single posts
 * 文章页面，跟首页index.php引用的同一个content.php文件
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 滋滋滋~
 */


// 使得同一用户刷新页面时浏览量不+1
$post_id=get_the_ID();
if(isset($_COOKIE['views'.$post_id.COOKIEHASH]) && $_COOKIE['views'.$post_id.COOKIEHASH] == '1'){       
}else{    
    setPostViews($post_id);
    setcookie('views'.$post_id.COOKIEHASH,'1',time() + 3600,COOKIEPATH,COOKIE_DOMAIN);//设置时间间隔
}



get_header(); ?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );
				//上面外部文件显示内容，下面显示评论
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				/*the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				) );*/

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
