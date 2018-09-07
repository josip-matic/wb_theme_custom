<?php get_header(); ?>

<div class="container">

	<div class="row">
		<div class="columns col-md-8 col-lg-9">

			<main role="main">
				<!-- section -->
				<section>

					<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

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
