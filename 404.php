<?php get_header(); ?>

	<div class="band header">
    <section class="layout">
      <h1>404</h1>
      <h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'bigredpod' ); ?></h2>
    </section>
  </div>
  
  <div class="band search-grid">
  <section class="layout">
    <article class="main-content">
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    </article>
    <article class="side-content">
      <div class="square-ad">
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
      </div>
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

<?php get_footer(); ?>
