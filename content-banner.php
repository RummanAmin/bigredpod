<?php $the_query = new WP_Query( 'showposts=1' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	 	$image = $image[0]; ?>
		<?php else :
	 $image = get_stylesheet_directory_uri() . '/img/backgrounds/image.jpg'; ?>
	<?php endif; ?>

	<article id="post-<?php the_ID(); ?>" class="story-background" style="background-image: radial-gradient(circle at 44% 37%, rgba(0,0,0,0.2),rgba(0,0,0,0.6)), url('<?php echo $image; ?>')" >
		<div>
		  <h4><?php the_title(); ?></h4>
		  <h5><span class="icon-calendar"></span> <?php the_time('j F Y'); ?></h5>
		  <?php the_excerpt(); ?>
		  <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
		</div>
	</article>

<?php endwhile; wp_reset_postdata(); ?>