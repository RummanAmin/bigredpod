<?php get_header(); ?>

		<?php if ( have_posts() ) : ?>
			<div class="band header">
	      <section class="layout">
	        <h2><?php the_archive_description(); ?></h2>
	        <h1><?php the_archive_title(); ?></h1>
	      </section>
	    </div>
	
			<div class="band search-grid">
	      <section class="layout">
					<article class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php if( has_post_thumbnail() ): ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
							<?php endif; ?>
						  <div class="inner-text">
						    <h4 class="post-title"><?php the_title(); ?></h4>
						    <h5><span class="icon-calendar"></span> <?php the_date(); ?></h5>
						    <?php the_excerpt(); ?>
						    <a href="<?php the_permalink(); ?>" class="button">Read More<span class="icon-arrow-right2"></span></a>
						  </div>
						</article>

		<?php	endwhile; ?>
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

	  <?php wp_reset_postdata(); ?>
		<?php	else : ?>
			
			<div class="band header">
        <section class="layout">
          <h2>Search results</h2>
          <h1>'No Match'</h1>
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

		 <?php endif; ?>


<?php get_footer(); ?>
