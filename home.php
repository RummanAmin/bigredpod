<?php get_header(); ?>

  <div class="band header">
    <section class="layout">
      <?php $the_query = new WP_Query( 'showposts=1&cat=-4' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <h2><?php the_time('l, jS F Y'); ?></h2>
        <h1><?php the_title(); ?></h1>
        <a href="podcast-post.html" class="button ">Listen Now<span class="icon-play2"></span></a>
        <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
        <div class="scroll-down">
          <p>Scroll down</p>
          <a class="icon-down" href="#scroll-down"></a>
        </div>
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