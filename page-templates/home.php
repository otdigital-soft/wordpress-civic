<?php
/**
 * Template Name: Homepage
 */

get_header();

global $post;
$media_type = get_field( 'media_type' );
$banner_image = get_field( 'banner_image' );
$banner_video = get_field( 'banner_video' );
?>
<!-- Banner Section -->
<section class="banner">
    <div class="banner-media">
        <?php
        if ( $media_type == 'video' ) : ?>
        <video autoplay playsinline>
            <source src="<?php echo esc_attr( $banner_video['url'] ); ?>">
        </video>
        <?php elseif ( $media_type == 'image' ) : ?>
            <img src="<?php echo esc_attr( $banner_image['url'] ); ?>" alt="">
        <?php endif; ?>
    </div>
    <div class="container">
        <?php
        get_template_part_args(
            'template-parts/content-modules-text',
            array(
                'v'  => 'title',
                't'  => 'h1',
                'o'  => 'f',
                'tc' => 'banner-title a-up'
            )
        );
        ?>
    </div>
</section>

<!-- Intro Section -->

<section class="introduction">
    <div class="container">
        <?php
        get_template_part_args(
            'template-parts/content-modules-text',
            array(
                'v'  => 'introduction_description',
                'w'  => 'div',
                'o'  => 'f',
                'wc' => 'introduction-description p1 a-up'
            )
        );
        ?>
        <?php
        get_template_part_args(
            'template-parts/content-modules-cta',
            array(
                'v'  => 'introduction_cta',
                'o'  => 'f',
                'c'  => 'introduction-cta btn a-up a-delay-1'
            )
        );
        ?>
    </div>
    <div class="introduction-circles">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
</section>

<!-- Statistics -->
<section class="statistics">
    <div class="container">
        <div class="statistics-intro section-intro">
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'statistics_title',
                    'o'  => 'f',
                    't'  => 'h6',
                    'tc' => 'statistics-title section-intro__title'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'statistics_description',
                    'o'  => 'f',
                    't'  => 'p',
                    'tc' => 'statistics__description section-intro__description'
                )
            );
            ?>
        </div>
        <div class="statistics-content section-content">
            <?php if ( have_rows( 'statistics_numbers' ) ) : ?>
                <?php while ( have_rows( 'statistics_numbers' ) ) : 
                    the_row(); ?>
                    <div class="statistics-item a-up a-delay-2">
                        <?php
                        $string = get_sub_field( 'number' );
                        preg_match('/^([^\d]*)(\d+)([^\d]*)$/', $string, $matches);
                        $currency = $matches[1];
                        $number = $matches[2];
                        $suffix = $matches[3];
                        echo '<h2 class="statistics-item__number cap">' . $currency . '<span class="number">' . $number . '</span>' . $suffix . '</h2>';               
                        ?>
                        <?php
                        get_template_part_args(
                            'template-parts/content-modules-text',
                            array(
                                'v'  => 'title',
                                't'  => 'p',
                                'tc' => 'statistics-item__title p2'
                            )
                        );
                        ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Section Portfolio -->
<section class="portfolio">
    <div class="container">
        <div class="portfolio-intro section-intro">
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'portfolio_title',
                    'o'  => 'f',
                    't'  => 'h6',
                    'tc' => 'portfolio-title section-intro__title'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'portfolio_description',
                    'o'  => 'f',
                    't'  => 'p',
                    'tc' => 'portfolio__description section-intro__description'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-cta',
                array(
                    'v'  => 'portfolio_cta',
                    'o'  => 'f',
                    'c'  => 'portfolio-cta section-intro__cta btn btn--dark'
                )
            );
            ?>
        </div>
        <div class="portfolio-content section-content">
            <?php
            $portfolios = get_field( 'portfolios' );
            if ( $portfolios ) : ?>
            <div class="portfolio-carousel">
                <?php foreach ( $portfolios as $post ) :
                    setup_postdata( $post );
                    get_template_part( 'template-parts/loop', 'portfolio' );
                endforeach;
                ?>
            </div>
            <?php wp_reset_postdata(); 
            endif; ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-cta',
                array(
                    'v'  => 'portfolio_cta',
                    'o'  => 'f',
                    'c'  => 'portfolio-content__cta btn btn--dark a-up a-delay-1'
                )
            );
            ?>
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
                    'tc' => 'services-title section-intro__title'
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
                    'tc' => 'services-description section-intro__description'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-cta',
                array(
                    'v'  => 'services_cta',
                    'o'  => 'f',
                    'c'  => 'services-cta section-intro__cta btn btn--dark'
                )
            );
            ?>
        </div>
        <div class="services-content section-content">
            <?php if ( have_rows( 'services_accordion' ) ) : ?>
            <div class="services-accordion">
                <?php while ( have_rows( 'services_accordion' ) ) : 
                    the_row(); ?>
                <div class="services-accordion__item">
                    <?php
                    get_template_part_args(
                        'template-parts/content-modules-text',
                        array(
                            'v'  => 'title',
                            't'  => 'h4',
                            'tc' => 'services-accordion__item__title a-up a-delay-2'
                        )
                    );
                    ?>
                    <?php
                    get_template_part_args(
                        'template-parts/content-modules-text',
                        array(
                            'v'  => 'description',
                            'w'  => 'div',
                            'wc' => 'services-accordion__item__description'
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
                    'v'  => 'services_cta',
                    'o'  => 'f',
                    'c'  => 'services-content__cta btn btn--dark a-up a-delay-1'
                )
            );
            ?>
        </div>
    </div>
</section>

<!-- Section Brands -->
<section class="brands">
    <div class="container">
        <div class="brands-intro section-intro">
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'brands_title',
                    'o'  => 'f',
                    't'  => 'h6',
                    'tc' => 'brands-title section-intro__title'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'brands_description',
                    'o'  => 'f',
                    't'  => 'p',
                    'tc' => 'brands-description section-intro__description'
                )
            );
            ?>
        </div>
        <div class="brands-content section-content">
            <?php if ( have_rows( 'brands' ) ) : ?>
                <div class="brands-item">
                    <?php while ( have_rows( 'brands' ) ) :
                        the_row(); ?>
                        <?php
                        get_template_part_args(
                            'template-parts/content-modules-image',
                            array(
                                'v'     => 'brand',
                                'v2x'   => false,
                                'is'    => false,
                                'is_2x' => false,
                                'w'     => 'div',
                                'wc'    => 'brands-item__image a-up a-delay-3',
                            )
                        );
                        ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Section News -->
<section class="news">
    <div class="container">
        <div class="news-intro section-intro">
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'news_title',
                    'o'  => 'f',
                    't'  => 'h6',
                    'tc' => 'news-title section-intro__title'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'news_description',
                    'o'  => 'f',
                    't'  => 'p',
                    'tc' => 'news__description section-intro__description'
                )
            );
            ?>
        </div>
        <div class="news-content section-content">
            <?php
            $news = get_field( 'news' );
            if ( $news ) : ?>
            <div class="news-carousel">
                <?php foreach ( $news as $post ) :
                    setup_postdata( $post );
                    get_template_part( 'template-parts/loop', 'post' );
                endforeach;
                ?>
            </div>
            <?php wp_reset_postdata(); 
            endif; ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-cta',
                array(
                    'v'  => 'news_cta',
                    'o'  => 'f',
                    'c'  => 'news-content__cta btn btn--dark a-up a-delay-1'
                )
            );
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
