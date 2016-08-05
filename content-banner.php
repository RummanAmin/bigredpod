<?php $the_query = new WP_Query( 'showposts=1&post_type=article' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	 	$image = $image[0]; ?>
		<?php else :
	 $image = get_stylesheet_directory_uri() . '/img/backgrounds/image.jpg'; ?>
	<?php endif; ?>

	<article id="post-<?php the_ID(); ?>" class="story-background" style="background-image: url('<?php echo $image; ?>')" >
		<div>
		  <p><?php the_time('j F Y'); ?></p>
		  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		</div>
	</article>

<?php endwhile; wp_reset_postdata(); ?>