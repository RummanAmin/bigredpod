<?php get_header(); ?>
  
  <div class="band header">
    <section class="layout">
      <?php
        $args = array(
        'post_type' => 'podcast',
        'showposts' => 1
        );
      ?>
      <?php $the_query = new WP_Query( $args ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <h2><?php the_time('l, jS F Y'); ?></h2>
        <h1><?php the_title(); ?></h1>
        <a href="/podcasts" class="button ">Listen Now<span class="icon-play2"></span></a>
        <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
        <div class="scroll-down">
          <p>Scroll down</p>
          <a class="icon-down" href="#scroll-down"></a>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </section>
  </div>

  <a name="scroll-down"></a>
  <div class="band intro">
    <section class="layout">
      <article>
        <ul class="details">
          <li class="strong">Podcast Details</li>
          <li><strong>Schedule</strong><br>Weekly on Mondays</li>
          <li><strong>Format</strong><br>Match Reaction, Opinion, Q&A</li>
          <li><strong>Platforms</strong><br>iTunes, Audioboom, Web</li>
          <li><strong>Social Media</strong><br>
            <ul class="social-media">
              <li><a href="https://twitter.com/bigredpod" class="icon-twitter"></a></li>
              <li><a href="https://www.facebook.com/bigredpod" class="icon-facebook"></a></li>
              <li><a href="https://www.instagram.com/bigredpod" class="icon-instagram"></a></li>
              <li><a href="#" class="icon-rss2"></a></li>
              <li><a href="#" class="icon-podcast"></a></li>
            </ul>
          </li>
          <li><a href="#">Subscribe</a></li>
        </ul>
      </article>
      <?php get_template_part( 'content', 'banner' ); ?>
    </section>
  </div>

  <div class="band podcasts"> 
    <div class="title layout">
      <h3>Previous Episodes</h3>
      <p>Missed an episode? No problem! You'll find all the previous episodes of the BigRedPod below. We're sure there'll be some real drama in the Premier League this season, and we'll be covering it all; so make sure you stay tuned.</p>
    </div>
    <section class="layout">
      <?php
        $args = array(
        'post_type' => 'podcast',
        'showposts' => 3
        );

        query_posts($args); 
      ?>
      <?php $the_query = new WP_Query( $args ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
          <div class="inner-text">
            <h4 class="post-title"><?php the_title(); ?></h4>
            <ul class="post-meta">
              <li>
                <h5><span class="icon-calendar"></span> <?php the_time('j F Y'); ?></h5>
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
    </section>
    <div class="load-more layout">
      <a class="button" href="/podcasts"><span class="icon-plus"></span></a>
    </div>
  </div>

  <div class="band post-grid">
    <div class="title layout">
      <h3>latest posts</h3>
      <p>Over the coming season, we'll be writing a ton of blog posts full of analysis and opinion on the ongoings at Manchester United.</p>
    </div>
    <section class="layout">
      <?php $the_query = new WP_Query( 'showposts=3' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
          <div class="inner-text">
            <h4 class="post-title"><?php the_title(); ?></h4>
            <h5><span class="icon-calendar"></span> <?php the_time('j F Y'); ?></h5>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
          </div>
        </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </section>
    <div class="load-more layout">
      <a class="button" href="/blog"><span class="icon-plus"></span></a>
    </div>
  </div>


<?php get_footer(); ?>