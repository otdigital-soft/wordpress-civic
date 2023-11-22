</main>

<?php
$image       = get_field( 'footer_logo', 'options' );
$extra_menu  = get_field( 'extra_menu', 'options' );
$footer_menu = get_field( 'footer_menu', 'options' );
$social_menu = get_field( 'social_menu', 'options' );
?>

<footer class="footer">
    <div class="container">
        <div class="footer-info">
            <?php if ( have_rows( 'address', 'options' ) ) : ?>
                <div class="footer-info__address">
                    <?php while ( have_rows( 'address', 'options' ) ) :
                        the_row(); ?>
                        <?php
                        get_template_part_args(
                            'template-parts/content-modules-text',
                            array(
                                'v'  => 'address',
                                't'  => 'p',
                                'tc' => 'footer-info__address__item'
                            )
                        );
                        ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'phone',
                    't'  => 'p',
                    'o'  => 'o',
                    'tc' => 'footer-info__phone'
                )
            );
            ?>
            <?php
            get_template_part_args(
                'template-parts/content-modules-text',
                array(
                    'v'  => 'email',
                    't'  => 'p',
                    'o'  => 'o',
                    'tc' => 'footer-info__email'
                )
            );
            ?>
            <div class="footer-info__social_and_logo">
                <?php if ( $social_menu ) : ?>
                <ul class="footer-info__social">'
                    <?php foreach( $social_menu as $social) : ?>
                    <li class="footer-info__social__item"><a href="<?php echo esc_url( $social['url'] ); ?>"><img src="<?php echo esc_attr( $social['icon']['url'] ); ?>" alt=""></a></li></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <div class="footer-logo">
                    <?php if ( $image ) : ?>
                    <a href="/">
                        <img src="<?php echo esc_attr( $image['url'] ); ?>" alt="footer logo">
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="footer-menu">
            <?php
			wp_nav_menu(
				array(
					'container'  => false,
					'menu'       => 'Main Menu',
					'menu_class' => 'footer-menu__main',
				)
			);
			?>
            <?php if ( have_rows( 'extra_menu', 'options' ) ) : ?>
            <ul class="footer-menu__extra">
                <?php while ( have_rows( 'extra_menu', 'options' ) ) : 
                    the_row(); ?>
                    <li class="footer-menu__extra__item">
                        <?php
                        get_template_part_args(
                            'template-parts/content-modules-cta',
                            array(
                                'v'  => 'cta',
                                'c'  => 'extra-item__menu'
                            )
                        );
                        ?>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <?php if ( have_rows( 'footer_menu', 'options' ) ) : ?>
            <ul class="footer-menu__menu">
                <?php while ( have_rows( 'footer_menu', 'options' ) ) :
                    the_row(); ?>
                    <li class="footer-menu__menu__item">
                        <?php
                        get_template_part_args(
                            'template-parts/content-modules-cta',
                            array(
                                'v'  => 'cta',
                                'c'  => 'menu-item__menu'
                            )
                        );
                        ?>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
