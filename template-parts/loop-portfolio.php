<?php
global $post;
$url        = get_the_permalink();
$categories = get_the_terms( $post->ID, 'portfolio_category' );
$position   = get_field( 'position' );
?>
<article class="loop-portfolio">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="loop-portfolio__img">
			<a href="<?php echo esc_url( $url ); ?>">
				<?php the_post_thumbnail( 'portfolio-image' ); ?>
			</a>
		</div>
	<?php endif; ?>
	<div class="loop-portfolio__title">
		<a href="<?php echo esc_url( $url ); ?>"><h5 class="loop-portfolio__title"><?php echo get_the_title(); ?></h5></a>
	</div>
	<div class="loop-portfolio__position p2"><?php echo esc_html( $position ); ?></div>
	<?php if ( $categories ) : ?>
	<div class="loop-portfolio__category">
		<?php foreach ( $categories as $category ) : ?>
			<div class="loop-portfolio__category__item"><?php echo esc_html( $category->name ); ?></div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
</article>
