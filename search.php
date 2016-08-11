<?php get_header(); ?>
        
  <?php if ( have_posts() ) : ?>
      <div class="band header">
        <section class="layout">
          <h2>Search results</h2>
          <h1>'<?php the_search_query(); ?>'</h1>
        </section>
      </div>

      <div class="band search-grid">
        <section class="layout">
          <article class="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part('content', 'search'); ?>

    <?php endwhile; ?>
          </article>
          <article class="side-content">
            <?php get_sidebar(); ?>
            <h4 class="widget-title">Social Media</h4>
            <ul class="social-media">
              <li><a href="https://twitter.com/bigredpod" class="icon-twitter"></a></li>
              <li><a href="https://www.facebook.com/bigredpod" class="icon-facebook"></a></li>
              <li><a href="https://plus.google.com/+Bigredpod" class="icon-google-plus"></a></li>
              <li><a href="http://bigredpod.com/feed/podcast/" class="icon-rss2"></a></li>
              <li><a href="https://audioboom.com/bigredpod" class="icon-podcast"></a></li>
            </ul>
          </article>
        </section>
      </div>

    <?php wp_reset_postdata(); ?>
    <?php else : ?>

      <div class="band header">
        <section class="layout">
          <h2>Search results</h2>
          <h1>'<?php the_search_query(); ?>'</h1>
        </section>
      </div>
      
      <div class="band search-grid">
      <section class="layout">
        <article class="main-content">
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        </article>
        <article class="side-content">
          <?php get_sidebar(); ?>
          <h4 class="widget-title">Social Media</h4>
          <ul class="social-media">
            <li><a href="https://twitter.com/bigredpod" class="icon-twitter"></a></li>
            <li><a href="https://www.facebook.com/bigredpod" class="icon-facebook"></a></li>
            <li><a href="https://plus.google.com/+Bigredpod" class="icon-google-plus"></a></li>
            <li><a href="http://bigredpod.com/feed/podcast/" class="icon-rss2"></a></li>
            <li><a href="https://audioboom.com/bigredpod" class="icon-podcast"></a></li>
          </ul>
        </article>
      </section>
    </div>

     <?php endif; ?>


<?php get_footer(); ?>