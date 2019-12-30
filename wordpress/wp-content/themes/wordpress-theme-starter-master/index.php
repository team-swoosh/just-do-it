<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
	<div class="container">
		<figure class="hero">

		</figure>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
