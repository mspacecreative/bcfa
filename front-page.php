<?php 
get_header('home'); ?>

<?php 
if ( have_posts() ) {
 	while ( have_posts() ) { 
 	the_post();
	the_content();
	}
}

get_footer(); ?>