<?php get_header();?>

	<main id="site-content" role="main">

		<?php while(have_posts()): the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>

		<?php endwhile; ?>
		
	</main>

<?php get_footer();?>