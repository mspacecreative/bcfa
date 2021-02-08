<?php 
$args = array(
	'post_type' => 'events',
	'posts_per_page' => 1,
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) :
while ( $loop->have_posts() ) : $loop->the_post();

$title = get_the_title();
$date = get_the_date();
$blurb = get_the_excerpt(); ?>

<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="col_inner">
		<h2><?php echo $title ?></h2>
		<p class="date"><?php echo $date ?></p>
		<p class="excerpt"><?php echo $blurb ?></p>
		<a class="learn_more" href="<?php echo the_permalink(); ?>"><?php echo __('Learn more'); ?></a>
	</div>
</div>

<?php 
endwhile;

else : ?>
<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="col_inner">
		<h2><?php echo __('Events'); ?></h2>
		<?php echo __('Sorry, no postings yet'); ?>
	</div>
</div>

<?php 
endif; wp_reset_postdata(); ?>