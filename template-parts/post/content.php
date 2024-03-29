<?php


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	
	<!-- 如果是文章页则显示内容，否则显示卡片 -->
	<?php if ( !is_single() ) : ?>
		
		<div class="post_item_card" >
			<!--如果有缩略图，但不是文章页，则显示缩略图-->
			<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
				 <div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
					</a>
				</div>	
			<?php endif; ?>
			<!--如果没有缩略图，也不是文章页，则添加一个随机缩略图-->
			<?php if ( '' == get_the_post_thumbnail() && ! is_single() ) : ?>
				<div class="post-thumbnail">
					<a href="<?php the_permalink();?>">
						<img src="<?php echo catch_rand_image();?>"> 
			  	 	</a>	
				</div>
			<?php endif; ?>
			<!--在缩略图下添加标题和发布时间-->
			<?php
			the_title( '<div style="margin-left:10px; margin-right:10px; height:52px; "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' ); //标题
			/*echo '<p class="pubtime" style="color:red;bottom:0" >';
				echo twentyseventeen_time_link();//发布时间
			echo '</p>';*/
			?>
			<!--发布时间、阅读量等，font-awesome图标-->
			<div style="margin-left:10px;margin-right:10px;padding-top:1em">
				<?php 
					echo '<div style="font-size:12px;color:#999999">';
					echo '<i class="fa fa-calendar"></i> &nbsp;';
					echo get_the_date('Y-m-d');
					echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					echo '<i class="fa fa-eye"></i> &nbsp;';
					echo getPostViews(get_the_ID());
					echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					echo '<i class="fa fa-comments"></i> &nbsp;';   
					echo comments_number('0', '1', '%');					
					echo '</div>';
				?>
			</div> 
		</div>

	<?php else: ?>
		<!-- 如果是文章页，则显示内容 -->
		<?php
			echo '<span style="font-size:1.5em">';
			echo get_the_title();
			echo '</span><br>';

			echo '<div style="font-size:12px;color:#999999">';
			echo '<i class="fa fa-user"></i> &nbsp;';
		    echo get_the_author();
		    echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		    echo '<i class="fa fa-clock-o"></i> &nbsp;';
		    echo the_time('Y-m-d  H:i:s');
		    echo '&nbsp;&nbsp;&nbsp;&nbsp;';
     		echo '<i class="fa fa-eye"></i> &nbsp;';
			echo getPostViews(get_the_ID());
		    echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		    echo '<i class="fa fa-comments"></i> &nbsp;';  
		    echo comments_number('0', '1', '%');		    
			echo '</div><hr>';
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			) );
		?>
	<?php endif; ?>




	<!-- <div class="entry-content">
		<?php
		/* translators: %s: Name of current post 
			摘要+继续阅读
		*/
	/*	the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );*/
	
		?>
	</div>.entry-content -->


</article><!-- #post-## -->
