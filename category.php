<?php get_header(); ?>

<div id="main-content">
	<div class="innerContainer">
	 	<h1 class="page_title"><?php esc_html_e( 'Category: ', 'bcfa' ); single_cat_title(); ?></h1>
	</div>
	
	<?php 
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
	);
	
	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) : ?>
	
	<div class="innerContainer">
		<div class="row sidebar_layout cards">
			
			<?php while ( $loop->have_posts() ) : $loop->the_post();
	
			$title = get_the_title();
			$date = get_the_date();
			$blurb = get_the_excerpt();
			$newsletter = in_category('newsletter'); ?>
			
			<div class="col col-lg-8 col-md-8 col-sm-6 col-xs-12 row">
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="col_inner">
						<h3 style="margin-bottom: 0;"><?php echo $title ?></h3>
						<p class="date"><?php echo $date ?></p>
						<p class="excerpt"><?php echo $blurb ?></p>
						<p class="inline">
							<?php if ( $newsletter ) : ?>
							<a class="read_more" href="<?php echo the_permalink(); ?>"><?php echo __('View newsletter'); ?></a>
							<?php else : ?>
							<a class="read_more" href="<?php echo the_permalink(); ?>"><?php echo __('Read post'); ?></a>
							<?php endif; ?>
						</p>
					</div>
				</div>
			</div>
			
			<?php echo get_sidebar();
			
			endwhile; ?>
		
		</div>
	</div>
	
	<?php endif; wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>