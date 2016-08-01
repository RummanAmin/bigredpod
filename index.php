<?php get_header(); ?>
        
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="band header">
      <section class="layout">
        <h2><?php the_time('l, jS F Y'); ?></h2>
        <h1><?php the_title(); ?></h1>
        <a href="/podcasts" class="button ">Listen Now<span class="icon-play2"></span></a>
        <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
        <div class="scroll-down">
          <p>Scroll down</p>
          <a class="icon-down" href="#scroll-down"></a>
        </div>
      </section>
    </div>
    
    <a name="scroll-down"></a>
    <div class="band main">
      <section class="layout">
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php the_content(); ?></article>

      </section>
    </div>

    <?php endwhile; else : ?>

  	<div class="band main">
      <section class="layout">

  		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

  		</section>
    </div>

  <?php endif; ?>

<?php get_footer(); ?>