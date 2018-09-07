<?php get_header(); ?>

<div class="container">

	<div class="row">
		<div class="columns col-md-8 col-lg-9">

			<main role="main">
				<!-- section -->
				<section>

					<!-- article -->
					<article id="post-404">

						<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
						<h2>
							<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
						</h2>

					</article>
					<!-- /article -->

				</section>
				<!-- /section -->
			</main>

		</div>


		<div class="columns col-md-4 col-lg-3">

			<?php get_sidebar(); ?>

		</div>
	</div>

</div>

<?php get_footer(); ?>

