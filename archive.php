<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
			<div class="band header">
	      <section class="layout">
	        <h2><?php the_archive_description(); ?></h2>
	        <h1><?php the_archive_title(); ?></h1>
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
						<?php get_sidebar(); ?>
					</article>
				</section>
	    </div>

		<?php	else : ?>
			
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
