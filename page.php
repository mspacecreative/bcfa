<?php get_header(); ?>

<div id="main-content">
	<div class="innerContainer">
	 	<h1><?php echo the_title(); ?></h1>
	</div>

	<?php 
	if ( have_posts() ) {
	 	while ( have_posts() ) { 
		 	the_post();
			the_content();
		}
	} ?>

</div>

<?php get_footer(); ?>
