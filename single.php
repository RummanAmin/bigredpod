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
      <h2><?php the_time('l, jS F Y'); ?></h2>
      <h1><?php the_title(); ?></h1>
      <div class="tags">
      	<?php the_tags( '', '', '' ); ?>
      </div>
      <div class="scroll-down">
        <p>Scroll down</p>
        <a class="icon-down" href="#scroll-down"></a>
      </div>
    </section>
  </div>
	
	<a name="scroll-down"></a>
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
              <li><a href="https://www.instagram.com/bigredpod" class="icon-instagram"></a></li>
              <li><a href="#" class="icon-rss2"></a></li>
              <li><a href="#" class="icon-podcast"></a></li>
            </ul>
          </li>
          <li><a href="#">Subscribe</a></li>
        </ul>
      </article>
      <article class="story-background" style="background-image: url('<?php echo $image; ?>');" >
        <div>
          <p><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
        </div>
      </article>
    </section>
  </div>

	<div class="band main">
		<section class="layout">
			<article class="post-content">
        <?php the_content(); ?>
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

<?php endwhile; endif; ?>

<?php get_footer(); ?>