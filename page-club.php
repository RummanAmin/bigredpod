<?php get_header(); ?>

  <div class="band header">
    <section class="layout">
      <h1><?php the_title(); ?></h1>
      <h2><?php the_field('introduction'); ?></h2>
    </section>
  </div>
  
  <div class="band main">
    <section class="layout">
      <article>
        <?php $the_query = new WP_Query( 'category_name=football&post_type=article' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>" class="news-image"><?php the_post_thumbnail();?></a>
            <div class="news-main">
              <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <h5><span class="icon-calendar"></span> <?php the_time('j F Y'); ?></h5>
              <?php the_excerpt(); ?>
            </div>
          </div>
      <?php endwhile; wp_reset_postdata(); ?>
      </article>
      <article>
        <div class="football-tables">
          <h4>Results</h4>
          <?php echo do_shortcode("[soccer-info id='2' type='results' team='662||Manchester United' width='100%' /]"); ?>
        </div>
        <div class="football-tables">
          <h4>Fixtures</h4>
          <?php echo do_shortcode("[soccer-info id='2' type='fixtures' team='662||Manchester United' width='100%' /]"); ?>
        </div>
        <div class="football-tables">
          <h4>Table</h4>
          <?php echo do_shortcode("[soccer-info id='2' type='table' columns='#,Team,MP,W,D,L,G,P' highlight='662||Manchester United' width='100%' /]"); ?>
        </div>
      </article>

    </section>
  </div>

<?php get_footer(); ?>