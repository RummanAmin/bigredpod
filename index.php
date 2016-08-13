<?php get_header(); ?>
        
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="band header">
      <section class="layout">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_field('introduction'); ?></h2>
      </section>
    </div>
    
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