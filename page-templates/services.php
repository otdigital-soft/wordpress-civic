<?php
/**
 * Template Name: Services
 */

get_header();

global $post;
?>

<!-- Banner -->
<section class="services-banner">
	<div class="container">
		<div class="section-intro"></div>
		<div class="services-banner__content section-content">
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'banner_title',
					't'  => 'h1',
					'o'  => 'f',
					'tc' => 'services-banner__title a-up',
				)
			);
			?>
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'banner_description',
					'w'  => 'div',
					'o'  => 'f',
					'wc' => 'services-banner__description a-up a-delay-1',
				)
			);
			?>
		</div>
	</div>
</section>
<!-- Gallery -->
<section class="services-gallery">
	<?php $gallery = get_field( 'gallery' ); ?>
	<div class="container">
		<?php if ( $gallery ) : ?>
			<?php foreach ( $gallery as $image ) : ?>
			<div class="services-gallery__item a-up a-delay-1">
				<img src="<?php echo esc_attr( $image['url'] ); ?>" alt="" class="item-image">
				<p class="item-caption"><?php echo esc_html( $image['caption'] ); ?></p>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</section>

<!-- Project Accordion -->
<section class="services-project">
	<?php
	$accordion = get_field( 'accordion' );
	?>
	<div class="container">
		<?php if ( $accordion ) : ?>
			<?php
			foreach ( $accordion as $ind => $item ) :
				$title       = $item['title'];
				$description = $item['description'];
				$categories  = $item['categories'];
				?>
				<div class="services-project__item <?php echo esc_attr( $ind == 0 ? 'active' : '' ); ?>">
					<?php $projects = $item['projects']; ?>
					<div class="item-project">
						<?php
						if ( $projects ) :
							foreach ( $projects as $post ) :
								setup_postdata( $post );
								$terms = get_the_terms( $post->ID, 'portfolio_category' );
								?>
							<div class="item-project__item">
								<div class="item-project__image">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="item-project__title">
									<?php the_title(); ?>
								</div>
							</div>
							<?php endforeach;
							wp_reset_postdata();
						endif;
						?>
					</div>
					<h5 class="item-relevant">Relevant Projects</h5>
					<div class="item-content">
						<h4 class="item-content__title"><?php echo esc_html( $title ); ?></h4>
						<div class="item-content__main">
							<p class="item-content__description"><?php echo esc_html( $description ); ?> </p>
							<?php if ( $categories ) : ?>
							<ul class="item-content__category">
								<?php foreach ( $categories as $category ) : ?>
									<li class="item-content__category__item"><?php echo esc_html( $category['title'] ); ?></li>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php
			endforeach;
			?>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
