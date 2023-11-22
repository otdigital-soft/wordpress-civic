<?php
/**
 * Template Name: Portfolio
 */

get_header();

global $post;
?>

<!-- Banner -->
<section class="portfolio-banner">
    <div class="container">
        <div class="portfolio-banner__circles">
            <div class="circles">
                <div class="circle a-up a-delay-1"></div>
                <div class="circle a-up a-delay-1"></div>
                <div class="circle a-up a-delay-1"></div>
                <div class="circle a-up a-delay-1"></div>
                <div class="circle circle-green a-up a-delay-1"></div>
            </div>
        </div>
        <div class="portfolio-banner__content">
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'banner_title',
                    't'  => 'h1',
                    'o'  => 'f',
                    'tc' => 'portfolio-banner__title a-up'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'banner_description',
                    't'  => 'p',
                    'o'  => 'f',
                    'tc' => 'portfolio-banner__description a-up a-delay-1'
                )
            );
            ?>
            <?php if ( have_rows( 'numbers' ) ) : ?>
                <div class="portfolio-banner__number">
                    <?php while ( have_rows( 'numbers' ) ) : 
                        the_row(); ?>
                        <div class="portfolio-banner__number__item a-up a-delay-2">
                            <?php
                            $string = get_sub_field( 'number' );
                            preg_match('/^([^\d]*)(\d+)([^\d]*)$/', $string, $matches);
                            $currency = $matches[1];
                            $number = $matches[2];
                            $suffix = $matches[3];
                            echo '<h2 class="portfolio-banner__number__item__number">' . $currency . '<span class="number">' . $number . '</span>' . $suffix . '</h2>';               
                            ?>
                            <?php
                            get_template_part_args(
                                'template-parts/content-modules-text',
                                array(
                                    'v'  => 'title',
                                    't'  => 'p',
                                    'tc' => 'portfolio-banner__number__item__title p2'
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

<!-- Portfolios Section -->
<section class="portfolio-archieve">
    <?php
    $categories = get_categories(
        array(
            'taxonomy' => 'portfolio_category'
        )
    );
    $args = array(
        'post_type'      => 'portfolio',
        'posts_per_page' => '-1',
        'paged'          => 1
    );
    $query = new WP_Query( $args );
    ?>
    <div class="container">
        <div class="portfolio-archieve__info">
            <div class="portfolio-archieve__info__title">Portfolio Categories</div>
            <?php if ( $categories ) : ?>
            <ul class="portfolio-archieve__category">
                <li class="portfolio-archieve__category__item active" value="all">All Projects</li>
                <?php foreach ( $categories as $category ) : ?>
                    <li class="portfolio-archieve__category__item" value="<?php echo esc_attr( $category->slug ); ?>">
                        <?php echo esc_html( $category->name ); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="portfolio-archieve__content">
            <?php if ( $query->have_posts() ) : ?>
                <div class="portfolio-archieve__grid"
                    data-cat=""
                    data-post-type="portfolio"
                    data-paged=""
                    data-posts-per-page="-1"
                >
                    <?php while ( $query->have_posts() ) :
                        $query->the_post();
                        get_template_part( 'template-parts/loop', 'portfolio' );
                        ?>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
