<?php get_header(); ?>

	<div id="primary" class="band error-404">
		<main id="main" class="site-main" role="main">

			<section class="layout">
				<article><h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'bigredpod' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'bigredpod' ); ?></p>
					</article>
					<article>
						<?php get_sidebar(); ?>
					</article>
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
