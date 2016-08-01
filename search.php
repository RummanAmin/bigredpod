<?php get_header(); ?>
        
  <?php if ( have_posts() ) : ?>
      <div class="band header">
        <section class="layout">
          <h2>Search Results</h2>
          <h1><?php the_search_query(); ?></h1>
          <div class="scroll-down">
            <p>Scroll down</p>
            <a class="icon-down" href="#scroll-down"></a>
          </div>
        </section>
      </div>

      <a name="scroll-down"></a>
      <div class="band search-grid">
        <section class="layout">
          <article class="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part('content', 'search'); ?>

    <?php endwhile; ?>
          </article>
          <article class="side-content">
            <?php get_sidebar(); ?>
          </article>
        </section>
      </div>

    <?php else : ?>
      
      <div class="band main">
      <section class="layout">
        <article class="main-content">
          <h1>Search Results</h1>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        </article>
        <article class="side-content">
          <?php get_sidebar(); ?>
        </article>
      </section>
    </div>

     <?php endif; ?>


<?php get_footer(); ?>