<?php get_header(); ?>

<div id="main-content">
	<div class="innerContainer">
	 	<h1 class="page_title"><?php esc_html_e( 'Category: ', 'bcfa' ); single_cat_title(); ?></h1>
	</div>
	
	<?php 
	if ( have_posts() ) : ?>
	
	<div class="innerContainer">
		<div class="row sidebar_layout cards">
			
			<div class="col col-lg-8 col-md-8 col-sm-6 col-xs-12 row">
				
				<?php while ( have_posts() ) : the_post();
	
				$title = get_the_title();
				$date = get_the_date();
				$blurb = get_the_excerpt();
				$newsletter = in_category('newsletter'); ?>
				
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
				
				<?php endwhile; ?>
				
			</div>
			
			<?php echo get_sidebar('category'); ?>
		
		</div>
	</div>
	
	<?php endif; ?>

</div>

<?php get_footer(); ?>