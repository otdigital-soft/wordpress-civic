<?php
global $post;
?>
<!-- Section Portfolio Hero -->
<section class="portfolio-hero">
	<div class="container">
		<div class="portfolio-hero__info section-intro">
			<div class="portfolio-hero__info__item">
				<h6 class="item-title a-up a-delay-1">Year Built</h6>
				<?php
				get_template_part_args(
					'template-parts/content-modules-text',
					array(
						'v'  => 'year_built',
						't'  => 'h5',
						'o'  => 'f',
						'tc' => 'item-content p a-up a-delay-2',
					)
				);
				?>
			</div>
			<div class="portfolio-hero__info__item">
				<h6 class="item-title a-up a-delay-1">Type</h6>
				<?php
				get_template_part_args(
					'template-parts/content-modules-text',
					array(
						'v'  => 'type',
						't'  => 'h5',
						'o'  => 'f',
						'tc' => 'item-content p a-up a-delay-2',
					)
				);
				?>
			</div>
			<div class="portfolio-hero__info__item">
				<h6 class="item-title a-up a-delay-1">Square Footage</h6>
				<?php
				get_template_part_args(
					'template-parts/content-modules-text',
					array(
						'v'  => 'square_footage',
						't'  => 'h5',
						'o'  => 'f',
						'tc' => 'item-content p a-up a-delay-2',
					)
				);
				?>
			</div>
			<div class="portfolio-hero__info__item">
				<h6 class="item-title a-up a-delay-1">Cost</h6>
				<?php
				get_template_part_args(
					'template-parts/content-modules-text',
					array(
						'v'  => 'cost',
						't'  => 'h5',
						'o'  => 'f',
						'tc' => 'item-content p a-up a-delay-2',
					)
				);
				?>
			</div>
			<div class="portfolio-hero__info__item">
				<h6 class="item-title a-up a-delay-1">Units</h6>
				<?php
				get_template_part_args(
					'template-parts/content-modules-text',
					array(
						'v'  => 'units',
						't'  => 'h5',
						'o'  => 'f',
						'tc' => 'item-content p a-up a-delay-2',
					)
				);
				?>
			</div>
			<div class="portfolio-hero__info__item">
				<h6 class="item-title a-up a-delay-1">Website</h6>
				<?php
				get_template_part_args(
					'template-parts/content-modules-text',
					array(
						'v'  => 'website',
						't'  => 'h5',
						'o'  => 'f',
						'tc' => 'item-content p a-up a-delay-2',
					)
				);
				?>
			</div>
		</div>
		<h5 class="mobile-show a-up a-delay-1">Project Details</h5>
		<div class="portfolio-hero__main section-content">
		<?php
		get_template_part_args(
			'template-parts/content-modules-text',
			array(
				'v'  => 'position',
				't'  => 'h6',
				'o'  => 'f',
				'tc' => 'portfolio-hero__position p2 a-up a-delay-1',
			)
		);
		?>
		<h1 class="portfolio-hero__title a-up a-delay-1"><?php the_title(); ?></h1>
		<div class="portfolio-hero__content a-up a-delay-2"><?php the_content(); ?></div>
	</div>
	</div>
</section>
<!-- Gallery Carousel -->
<section class="portfolio-gallery">
	<?php
	$gallery = get_field( 'gallery' );
	if ( $gallery ) :
		?>
	<div class="portfolio-gallery__carousel">
		<?php foreach ( $gallery as $ind => $image ) : ?>
		<div class="gallery-image">
			<img src="<?php echo esc_attr( $image['url'] ); ?>" alt="">
            <div class="gallery-image__info">
                <h4 class="info-number"><?php echo esc_html( $ind + 1 . '/' . count( $gallery ) ); ?></h4>
                <p class="info-caption"><?php echo esc_html( $image['caption'] ); ?></p>
            </div>
		</div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>
</section>
<!-- Team Section -->
<section class="portfolio-team">
	<div class="container">
		<h6 class="portfolio-team__title section-intro a-up a-delay-1">Team</h6>
		<div class="portfolio-team__content section-content">
			<ul class="portfolio-team__info">
				<li class="portfolio-team__info__item">
					<h6 class="item-title a-up a-delay-1 p2">Developer</h6>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'developer',
							't'  => 'h5',
							'o'  => 'f',
							'tc' => 'item-content a-up a-delay-2',
						)
					);
					?>
				</li>
				<li class="portfolio-team__info__item">
					<h6 class="item-title a-up a-delay-1 p2">Architect</h6>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'architect',
							't'  => 'h5',
							'o'  => 'f',
							'tc' => 'item-content a-up a-delay-2',
						)
					);
					?>
				</li>
				<li class="portfolio-team__info__item">
					<h6 class="item-title a-up a-delay-1 p2">General Contractor</h6>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'general_contractor',
							't'  => 'h5',
							'o'  => 'f',
							'tc' => 'item-content a-up a-delay-2',
						)
					);
					?>
				</li>
				<li class="portfolio-team__info__item">
					<h6 class="item-title a-up a-delay-1 p2">Interior Designer</h6>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'interior_designer',
							't'  => 'h5',
							'o'  => 'f',
							'tc' => 'item-content a-up a-delay-2',
						)
					);
					?>
				</li>
				<li class="portfolio-team__info__item">
					<h6 class="item-title a-up a-delay-1 p2">Landscape Architect</h6>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'landscape_architect',
							't'  => 'h5',
							'o'  => 'f',
							'tc' => 'item-content a-up a-delay-2',
						)
					);
					?>
				</li>
				<li class="portfolio-team__info__item">
					<h6 class="item-title a-up a-delay-1 p2">Structural Engineer</h6>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'structural_engineer',
							't'  => 'h5',
							'o'  => 'f',
							'tc' => 'item-content a-up a-delay-2',
						)
					);
					?>
				</li>
				<li class="portfolio-team__info__item">
					<h6 class="item-title a-up a-delay-1 p2">Mechanical Engineer</h6>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'mechanical_engineer',
							't'  => 'h5',
							'o'  => 'f',
							'tc' => 'item-content a-up a-delay-2',
						)
					);
					?>
				</li>
				<li class="portfolio-team__info__item">
					<h6 class="item-title a-up a-delay-1 p2">Civil Engineer</h6>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'civil_engineer',
							't'  => 'h5',
							'o'  => 'f',
							'tc' => 'item-content a-up a-delay-2',
						)
					);
					?>
				</li>
			</ul>
		</div>
	</div>
</section>
