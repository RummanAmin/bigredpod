<?php get_header(); ?>

  <div class="band header">
    <section class="layout">
      <?php $the_query = new WP_Query( 'showposts=1&post_type=article&cat=-8' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <h2><?php the_time('l, jS F Y'); ?></h2>
      <?php endwhile; wp_reset_postdata(); ?>
    </section>
  </div>

	<a name="scroll-down"></a>
  <div class="band post-grid">
    <div class="title layout">
      <h3>latest posts</h3>
      <p>Over the coming season, we'll be writing a ton of blog posts full of analysis and opinion on the ongoings at Manchester United.</p>
    </div>
    <section class="layout">
	    <?php get_template_part( 'content', 'news' ); ?>
    </section>
  </div>

<?php get_footer(); ?>