<?php get_header(); ?>

  <div class="band header">
    <section class="layout">
      <h1><?php the_title(); ?></h1>
      <h2><?php the_field('introduction'); ?></h2>
    </section>
  </div>
  
  <div class="band main">
    <section class="layout move-right">
      <article>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
         <!-- Default -->
          <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-7364953934710317"
            data-ad-slot="5572598182"
            data-ad-format="auto">
          </ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <div class="football-tables">
          <h4>Results</h4>
          <?php echo do_shortcode("[soccer-info id='2' type='results' team='662||Manchester United' limit='2' width='100%' /]"); ?>
        </div>
        <div class="football-tables">
          <h4>Fixtures</h4>
          <?php echo do_shortcode("[soccer-info id='2' type='fixtures' team='662||Manchester United' limit='2' width='100%' /]"); ?>
        </div>
        <div class="football-tables">
          <h4>Table</h4>
          <?php echo do_shortcode("[soccer-info id='2' type='table' columns='#,Team,MP,W,D,L,G,P' team='662||Manchester United' width='100%' /]"); ?>
          <?php echo do_shortcode("[soccer-info id='2' type='table' columns='#,Team,MP,W,D,L,G,P' highlight='662||Manchester United' width='100%' /]"); ?>
        </div>
      </article>
      <article>
        <?php get_template_part( 'content', 'club' ); ?>
      </article>
    </section>
  </div>

<?php get_footer(); ?>