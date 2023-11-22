<?php
global $post;
$categories = get_the_terms( $post->ID, 'team_category' );
$position   = get_field( 'position' );
?>
<article class="loop-team">
    <div class="loop-team__popup">+</div>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="loop-team__img">
			<a href="<?php echo esc_url( $url ); ?>">
				<?php the_post_thumbnail( 'team-image' ); ?>
			</a>
		</div>
	<?php endif; ?>
	<div class="loop-team__title">
		<a href="<?php echo esc_url( $url ); ?>"><h5 class="loop-team__title"><?php echo get_the_title(); ?></h5></a>
	</div>
	<div class="loop-team__position p2"><?php echo esc_html( $position ); ?></div>
	<?php if ( $categories ) : ?>
	<div class="loop-team__category">
		<?php foreach ( $categories as $category ) : ?>
			<div class="loop-team__category__item"><?php echo esc_html( $category->name ); ?></div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
</article>
