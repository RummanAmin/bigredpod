<?php
  $postsPerPage = 1;
  $args = array(
    'post_type' => 'podcast',
    'posts_per_page' => $postsPerPage
  );

  $loop = new WP_Query($args);
  while ($loop->have_posts()) : $loop->the_post(); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
  <div class="inner-text">
    <h4 class="post-title"><?php the_title(); ?></h4>
    <ul class="post-meta">
      <li>
        <h5><span class="icon-calendar"></span> <?php the_date(); ?></h5>
      </li>
      <li>
        <h5><span class="icon-clock"></span> <?php echo get_post_meta($post->ID, 'Duration', true); ?></h5>
      </li>
    </ul>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
  </div>
</article>

<?php endwhile; wp_reset_postdata(); ?>
