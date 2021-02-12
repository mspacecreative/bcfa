<!-- MOBILE NAV -->
	<?php get_template_part('templates/mobile-menu'); ?>
	<!-- / MOBILE NAV -->
<!-- header -->

<header id="header" class="header clear" role="banner">
	<div class="header_bg_container">
		<?php include 'includes/header-bg.php'; ?>
	</div>

	<!-- INNER CONTAINER -->
	<div class="innerContainer clear">

		<!-- logo -->
		<div class="logo"><a href="<?php echo esc_url( home_url() ); ?>">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/branding/bcfa_Logo.png" alt="Brant County Federation of Agriculture" class="logo-img">
		</a></div>
		<!-- /logo -->
	
		<!-- nav -->
		<nav class="nav" role="navigation">
			<?php dns_nav(); ?>
		</nav>
		<!-- /nav -->
	
	</div>
	<!-- / INNER CONTAINER -->
	
</header>
<!-- /header -->