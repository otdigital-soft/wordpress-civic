<?php
/**
 * Template Name: About
 */

get_header();

global $post;
?>

<!-- Banner -->
<section class="about-banner">
	<div class="container">
		<div class="section-intro"></div>
		<div class="about-banner__content section-content">
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'banner_title',
					't'  => 'h1',
					'o'  => 'f',
					'tc' => 'about-banner__title a-up',
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
					'wc' => 'about-banner__description a-up a-delay-1',
				)
			);
			?>
		</div>
	</div>
</section>

<!-- Gallery -->
<section class="about-gallery">
	<?php $gallery = get_field( 'gallery' ); ?>
	<div class="container">
		<?php if ( $gallery ) : ?>
			<?php foreach ( $gallery as $image ) : ?>
			<div class="about-gallery__item a-up a-delay-1">
				<img src="<?php echo esc_attr( $image['url'] ); ?>" alt="" class="item-image">
				<p class="item-caption"><?php echo esc_html( $image['caption'] ); ?></p>
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</section>
<!-- Quote Page -->
<section class="core">
	<div class="container">
		<div class="core-intro section-intro">
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'core_title',
					'o'  => 'f',
					't'  => 'h6',
					'tc' => 'core-title section-intro__title',
				)
			);
			?>
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'core_description',
					'o'  => 'f',
					't'  => 'p',
					'tc' => 'core-description section-intro__description',
				)
			);
			?>
		</div>
		<div class="core-content section-content">
            <?php $quotes = get_field( 'quotes' ); ?>
            <?php if ( $quotes ) :
                $max = 0;
                foreach ( $quotes as $item ) {
                    if ( $max < count( $item['quote'] ) )
                        $max = count( $item['quote'] );
                }
                foreach ( $quotes as $item ) :
                    $line = $item['quote'];
                ?>
                <div class="core-quote" style="padding-top: <?php echo ( 210 + 160 * ($max - count( $line ) ) )?>px;">
                    <?php foreach ( $line as $quote ) : ?>
                        <div class="core-quote__item">
                            <h5 class="core-quote__item__title p1"><?php echo esc_html( $quote['title'] ); ?></h5>
                            <p class="core-quote__item__description"><?php echo esc_html( $quote['description'] ); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
		</div>
	</div>
</section>
<!-- Section Services -->
<section class="services">
	<div class="container">
		<div class="services-intro section-intro">
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'services_title',
					'o'  => 'f',
					't'  => 'h6',
					'tc' => 'services-title section-intro__title',
				)
			);
			?>
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'services_description',
					'o'  => 'f',
					't'  => 'p',
					'tc' => 'services-description section-intro__description',
				)
			);
			?>
			<?php
			get_template_part_args(
				'template-parts/content-modules-cta',
				array(
					'v' => 'services_cta',
					'o' => 'f',
					'c' => 'services-cta section-intro__cta btn btn--dark',
				)
			);
			?>
		</div>
		<div class="services-content section-content">
			<?php if ( have_rows( 'services_accordion' ) ) : ?>
			<div class="services-accordion">
				<?php
				while ( have_rows( 'services_accordion' ) ) :
					the_row();
					?>
				<div class="services-accordion__item">
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'title',
							't'  => 'h4',
							'tc' => 'services-accordion__item__title a-up a-delay-2',
						)
					);
					?>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'description',
							'w'  => 'div',
							'wc' => 'services-accordion__item__description',
						)
					);
					?>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			<?php
			get_template_part_args(
				'template-parts/content-modules-cta',
				array(
					'v' => 'services_cta',
					'o' => 'f',
					'c' => 'services-content__cta btn btn--dark a-up a-delay-1',
				)
			);
			?>
		</div>
	</div>
</section>
<!-- Team -->
<section class="team">
    <div class="container">
        <div class="team-intro section-intro">
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'team_title',
                    'o'  => 'f',
                    't'  => 'h6',
                    'tc' => 'team-title section-intro__title'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'team_description',
                    'o'  => 'f',
                    't'  => 'p',
                    'tc' => 'team-description section-intro__description'
                )
            );
            ?>
        </div>
        <div class="team-content section-content">
            <?php
            $teams = get_field( 'team' );
            ?>
            <?php if ( $teams ) : ?>
                <?php foreach ( $teams as $post ) :
                    setup_postdata( $post );
                    get_template_part( 'template-parts/loop', 'team' );
                    ?>
                <?php endforeach; 
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Careers Services -->
<section class="services services--career">
	<div class="container">
		<div class="services-intro section-intro">
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'career_title',
					'o'  => 'f',
					't'  => 'h6',
					'tc' => 'services-title section-intro__title',
				)
			);
			?>
			<?php
			get_template_part_args(
				'template-parts/content-modules-text',
				array(
					'v'  => 'career_description',
					'o'  => 'f',
					't'  => 'p',
					'tc' => 'services-description section-intro__description',
				)
			);
			?>
			<?php
			get_template_part_args(
				'template-parts/content-modules-cta',
				array(
					'v' => 'career_cta',
					'o' => 'f',
					'c' => 'services-cta section-intro__cta btn btn--dark',
				)
			);
			?>
		</div>
		<div class="services-content section-content">
			<?php if ( have_rows( 'career_accordion' ) ) : ?>
			<div class="services-accordion">
				<?php
				while ( have_rows( 'career_accordion' ) ) :
					the_row();
					?>
				<div class="services-accordion__item">
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'title',
							't'  => 'h4',
							'tc' => 'services-accordion__item__title a-up a-delay-2',
						)
					);
					?>
					<?php
					get_template_part_args(
						'template-parts/content-modules-text',
						array(
							'v'  => 'description',
							'w'  => 'div',
							'wc' => 'services-accordion__item__description',
						)
					);
					?>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php
get_footer();
