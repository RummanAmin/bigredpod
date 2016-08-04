<?php
  $args = array(
    'post_type' => 'article'
  );

  $loop = new WP_Query($args);
  while ($loop->have_posts()) : $loop->the_post(); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
  <div class="inner-text">
    <h4 class="post-title"><?php the_title(); ?></h4>
    <h5><span class="icon-calendar"></span> <?php the_date(); ?></h5>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
  </div>
</article>

<?php endwhile; wp_reset_postdata(); ?>