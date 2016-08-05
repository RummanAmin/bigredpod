<?php get_header(); ?>

  <div class="band header">
    <section class="layout">
      <?php $the_query = new WP_Query( 'showposts=1&post_type=article' ); ?>
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
    <section id="ajax-posts" class="layout">
	    <?php get_template_part( 'content', 'blog' ); ?>
    </section>
    <!-- <div class="load-more layout">
      <a id="more_posts" class="button"><span class="icon-plus"></span></a>
    </div> -->
  </div>

<?php get_footer(); ?>