<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
	<?php endif; ?>
  <div class="inner-text">
    <h4 class="post-title"><?php the_title(); ?></h4>
    <h5><span class="icon-calendar"></span> <?php the_date(); ?></h5>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
  </div>
</article>