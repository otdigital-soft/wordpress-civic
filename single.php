<?php get_header(); ?>


	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			$type = get_post_type();
			?>

			<?php
			get_template_part( 'templates/content', $type );
			?>

	<?php endwhile; ?>

	<?php else : ?>
		<?php get_template_part( 'templates/content', 'none' ); ?>
	<?php endif; ?>


<?php
get_footer();
