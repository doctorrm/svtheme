<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

 

 <!-- 表情包 -->	
<script src="wp-content/themes/twentyseventeen/jQuery-emoji-master/lib/script/jquery.min.js"></script>
<script src="wp-content/themes/twentyseventeen/jQuery-emoji-master/lib/script/highlight.pack.js"></script>
<script src="wp-content/themes/twentyseventeen/jQuery-emoji-master/dist/js/jquery.emoji.min.js"></script>
<script src="wp-content/themes/twentyseventeen/jQuery-emoji-master/dist/js/emoji.list.js"></script>
 <!-- 表情包 -->	

<script type="text/javascript">
	
	var new_scroll_position = 0;
	var last_scroll_position;
	var header = document.getElementById("header");

	window.addEventListener('scroll', function(e) {
	  last_scroll_position = window.scrollY;

	  // Scrolling down
	  if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
		// header.removeClass('slideDown').addClass('slideUp');
		header.classList.remove("slideDown");
		header.classList.add("slideUp");

	  // Scrolling up
	  } else if (new_scroll_position > last_scroll_position) {
		// header.removeClass('slideUp').addClass('slideDown');
		header.classList.remove("slideUp");
		header.classList.add("slideDown");
	  }

	  new_scroll_position = last_scroll_position;
	});
</script>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->

	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
