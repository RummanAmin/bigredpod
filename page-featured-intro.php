<?php 

/**
Template Name: Featured Introduction
*/

get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $image = $image[0]; ?>
  <?php else :
 $image = get_stylesheet_directory_uri() . '/img/backgrounds/image.jpg'; ?>
<?php endif; ?>

<div class="band header">
  <section class="layout">
    <h1><?php the_title(); ?></h1>
    <h2><?php the_field('introduction'); ?></h2>
  </section>
</div>

<div class="band intro">
  <section class="layout">
    <article>
      <ul class="details">
        <li class="strong">Podcast Details</li>
        <li><strong>Schedule</strong><br>Weekly on Mondays</li>
        <li><strong>Format</strong><br>Match Reaction, Opinion, Q&amp;A</li>
        <li><strong>Platforms</strong><br>iTunes, Audioboom, Web</li>
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
  <section class="layout move-right">
    <article class="sidebar-posts">
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
    </article>
    <article>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php wp_reset_postdata(); ?>
      <?php endwhile; endif; ?>
    </article>
  </section>
</div>

<?php get_footer(); ?>