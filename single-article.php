<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $image = $image[0]; ?>
    <?php else :
   $image = get_stylesheet_directory_uri() . '/img/backgrounds/image.jpg'; ?>
  <?php endif; ?>

  <div class="band header">
    <section class="layout">
      <h1><?php the_title(); ?></h1>
      <h2><?php the_time('l, jS F Y'); ?></h2>
    </section>
  </div>
  
  <div class="band intro">
    <section class="layout">
      <article>
        <ul class="details">
          <li class="strong">Post Details</li>
          <li><strong>Date</strong><br><?php the_time('j F Y'); ?></li>
          <li><strong>Category</strong><br><?php the_category( ' ' ); ?></li>
          <li><strong>Author</strong><br><?php the_author(); ?></li>
          <li><strong>Social Media</strong><br>
            <ul class="social-media">
              <li><a href="https://twitter.com/bigredpod" class="icon-twitter"></a></li>
              <li><a href="https://www.facebook.com/bigredpod" class="icon-facebook"></a></li>
              <li><a href="https://plus.google.com/+Bigredpod" class="icon-google-plus"></a></li>
              <li><a href="http://bigredpod.com/feed/podcast/" class="icon-rss2"></a></li>
              <li><a href="https://audioboom.com/bigredpod" class="icon-podcast"></a></li>
            </ul>
          </li>
          <li><a href="https://itunes.apple.com/gb/podcast/bigredpod/id1140949515">Subscribe</a></li>
        </ul>
      </article>
      <article class="story-background" style="background-image: url('<?php echo $image; ?>');" >
        <div>
          <p class="post-excerpt"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
        </div>
      </article>
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <article class="post-content">
        <div class="content-ad">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
           <!-- Default -->
            <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-7364953934710317"
              data-ad-slot="5572598182"
              data-ad-format="rectangle, horizontal">
            </ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <?php the_content(); ?>
        <div class="post-ad">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
           <!-- Default -->
            <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-7364953934710317"
              data-ad-slot="5572598182"
              data-ad-format="rectangle, horizontal">
            </ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <div class="tags">
          <p><strong>Category:</strong> <?php the_category(' '); ?></p>
          <p><strong>Tags:</strong> <?php the_tags( '', ', '); ?></p>
        </div>
        <div class="share-post">
          <h4>Share this Post</h4>
          <p>Thank you for visiting the BigrRedPod. Please help us by sharing this post with your friends!</p>
          <ul>
            <li>
              <a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=bigredpod&related=<?php echo urlencode("Manchester United, Podcast, Football"); ?>" title="Share on Twitter" rel="nofollow" target="_blank" class="link-tw">Twitter</a>
            </li>
            <li>
              <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" class="link-fb">Facebook</a>
            </li>
            <li>
              <a target="black" href="https://plus.google.com/share?url=<?php the_permalink();?>&t=<?php the_title(); ?>" class="link-gp">Google +</a>
            </li>
            <li>
              <a target="blank" href="https://www.tumblr.com/share?v=3&u=<?php the_permalink();?>&t=<?php the_title(); ?>" class="link-tm">Tumblr</a>
            </li>
          </ul>
        </div>
        <div class="post-nav">
          <?php the_post_navigation( array (
            'prev_text' => __( '<strong>Previous:</strong> %title' ),
            'next_text' => __( '<strong>Next:</strong> %title' ),
            'screen_reader_text' => __( 'Navigation' ),
          )); ?>
        </div>
      </article>
    </section>
  </div>

  <div class="band extra">
    <section class="layout">
      <h5>Comments</h5>

      <?php 
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>

    </section>
  </div>

<?php wp_reset_postdata(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>