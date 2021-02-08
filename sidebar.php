<!-- sidebar -->
<div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<aside class="sidebar" role="complementary">
	
		<?php get_template_part( 'searchform' ); ?>
	
		<div class="sidebar-widget">
			<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-1' ) ) ?>
		</div>
	
		<div class="sidebar-widget">
			<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-2' ) ) ?>
		</div>
	
	</aside>
</div>
<!-- /sidebar -->
