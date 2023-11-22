<?php
/**
 * 404 Template
 */
get_header();
$extra_menu  = get_field( 'extra_menu', 'options' );
?>
<section class="error-404">
	<div class="container">
		<h1 class="error-404__heading cap a-up">404</h1>
		<h4 class="error-404__sub_heading">Page not found</h4>
        <p class="error-404__description">We can’t seem to find the page you’re looking for.<br>Here are some helpful links instead:</p>
        <div class="error-404__menu">
            <?php
            wp_nav_menu(
                array(
                    'container'  => false,
                    'menu'       => '404 Menu',
                    'menu_class' => 'nav__menu',
                )
            );
            ?>
        </div>
	</div>
</section>
<?php
get_footer();
