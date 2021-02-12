<!-- MENU TOGGLE -->
<button class="hamburger hamburger--spin" type="button">
	<span class="hamburger-box">
		<span class="hamburger-inner"></span>
	</span>
</button>
<!-- / MENU TOGGLE -->

<!-- MENU OVERLAY -->
<div class="menuOverlay">
	<div class="menuContainer">
		<div class="menuInner light">
			<?php 
			echo dns_nav();
			get_template_part('templates/social-media-buttons');
			?>
		</div>
	</div>
</div>
<!-- / MENU OVERLAY -->