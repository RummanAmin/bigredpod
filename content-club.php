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
    'category_name' => 'football',
    'post_status' => 'publish',
    'ignore_sticky_posts' => true,
    'order' => 'DESC', // 'ASC'
    'orderby' => 'date' // modified | title | name | ID | rand
);
$custom_query = new WP_Query( $custom_query_args );

if ( $custom_query->have_posts() ) :
    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>" class="news-image"><?php the_post_thumbnail();?></a>
        <div class="news-main">
          <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <h5><span class="icon-calendar"></span> <?php the_time('j F Y'); ?></h5>
          <?php the_excerpt(); ?>
        </div>
      </div>

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