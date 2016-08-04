<?php get_header(); ?>

  <div class="band header">
    <section class="layout">
      <?php $the_query = new WP_Query( 'showposts=1' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <h2><?php the_time('l, jS F Y'); ?></h2>
        <h1><?php the_title(); ?></h1>
        <a href="<?php the_field('audioboom'); ?>" class="button" target="_blank">Listen Now<span class="icon-play2"></span></a>
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
      <h3>Previous Episodes</h3>
      <p>Missed an episode? No problem! You'll find all the previous episodes of the BigRedPod below. We're sure there'll be some real drama in the Premier League this season, and we'll be covering it all; so make sure you stay tuned.</p>
    </div>
    <section class="layout">
	    <?php get_template_part( 'content', 'podcasts' ); ?>
    </section>
    <!-- <div class="load-more layout">
      <a id="more_posts" class="button"><span class="icon-plus"></span></a>
    </div> -->
  </div>

<?php get_footer(); ?>