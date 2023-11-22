<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="shortcut icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.png' ); ?>">

	<?php wp_head(); ?>
</head>

<?php
$image       = get_field( 'header_logo', 'options' );
$social_menu = get_field( 'social_menu', 'options' );
$extra_menu  = get_field( 'extra_menu', 'options' );
$menu_style  = get_field( 'menu_style' );
?>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container">
		<div class="header-logo">
			<?php if ( $image ) : ?>
			<a href="/">
				<img src="<?php echo esc_attr( $image['url'] ); ?>" alt="header logo">
			</a>
			<?php endif; ?>
		</div>
		<div class="hamburger style--<?php echo esc_attr( $menu_style ); ?>">
			<span></span>
		</div>
		<div class="header-nav style--<?php echo esc_attr( $menu_style ); ?>">
			<div class="container">
				<div class="header-nav__logo">
					<?php if ( $image ) : ?>
					<a href="/">
						<img src="<?php echo esc_attr( $image['url'] ); ?>" alt="header logo">
					</a>
					<?php endif; ?>
				</div>
				<div class="header-nav__info">
					<?php if ( have_rows( 'address', 'options' ) ) : ?>
						<div class="header-nav__info__address">
							<?php
							while ( have_rows( 'address', 'options' ) ) :
								the_row();
								?>
								<?php
								get_template_part_args(
									'template-parts/content-modules-text',
									array(
										'v'  => 'address',
										't'  => 'p',
										'tc' => 'header-nav__info__address__item',
									)
								);
								?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php
					$phone = get_field( 'phone', 'option' );
					$email = get_field( 'email', 'option' );
					?>
					<a href="tel:<?php echo esc_attr( $phone ); ?>" class="header-nav__info__phone p"><?php echo esc_html( $phone ); ?></a>
					<a href="mailto:<?php echo esc_attr( $email ); ?>" class="header-nav__info__email p"><?php echo esc_html( $email ); ?></a>
					<?php if ( $social_menu ) : ?>
					<ul class="header-nav__info__social">'
						<?php foreach ( $social_menu as $social ) : ?>
						<li class="header-nav__info__social__item"><a href="<?php echo esc_url( $social['url'] ); ?>"><img src="<?php echo esc_attr( $social['icon']['url'] ); ?>" alt=""></a></li></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
				<div class="header-nav__menus">
					<?php
					wp_nav_menu(
						array(
							'container'  => false,
							'menu'       => 'Main Menu',
							'menu_class' => 'header-nav__menu',
						)
					);
					?>
					<?php if ( have_rows( 'extra_menu', 'options' ) ) : ?>
					<ul class="header-nav__extra">
						<?php
						while ( have_rows( 'extra_menu', 'options' ) ) :
							the_row();
							?>
							<li class="header-nav__extra__item">
								<?php
								get_template_part_args(
									'template-parts/content-modules-cta',
									array(
										'v' => 'cta',
										'c' => 'extra-item__menu',
									)
								);
								?>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
			<div class="header-nav__close"></div>
		</div>
	</div>
</header>

<main class="main">
