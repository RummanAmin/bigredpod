<?php
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$custom_query_args = array(
    'post_type' => 'article', 
    'paged' => $paged,
    'cat' => '-8',
    'post_status' => 'publish',
    'ignore_sticky_posts' => true,
    'order' => 'DESC', // 'ASC'
    'orderby' => 'date' // modified | title | name | ID | rand
);
$custom_query = new WP_Query( $custom_query_args );

if ( $custom_query->have_posts() ) :
    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
        <div class="inner-text">
          <h4 class="post-title"><?php the_title(); ?></h4>
          <h5><span class="icon-calendar"></span> <?php the_date(); ?></h5>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
        </div>
      </article>

    <?php
    endwhile;
    ?>

    <div class="pagination">
      <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
        <nav class="prev-next-posts">
          <?php echo get_previous_posts_link( '&laquo; Previous Page' ); ?>
          <?php echo get_next_posts_link( 'Next Page &raquo;', $custom_query->max_num_pages ); ?>
        </nav>
      <?php endif; ?>
    </div>

<?php
    wp_reset_postdata(); // reset the query 
else:
    echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
endif;
?>