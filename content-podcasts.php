<?php
  $args = array(
    'post_type' => 'podcast'
  );

  $loop = new WP_Query($args);
  while ($loop->have_posts()) : $loop->the_post(); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>"><img src="<?php the_field('cover_art'); ?>" alt="<?php echo get_the_title(get_field('cover_art')) ?>" /></a>
  <div class="inner-text">
    <h4 class="post-title"><?php the_title(); ?></h4>
    <ul class="post-meta">
      <li>
        <h5><span class="icon-calendar"></span> <?php the_date(); ?></h5>
      </li>
      <li>
        <h5><span class="icon-clock"></span> <?php the_field('duration'); ?> Mins</h5>
      </li>
    </ul>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
  </div>
</article>

<?php endwhile; wp_reset_postdata(); ?>
