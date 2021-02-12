<?php 
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 5, 
	'post__not_in' => array($post->ID)
);

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>

<ul class="sidebar_post_list">

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
	<li>
		<!-- post title -->
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<h4 class="darkHeading"><?php the_title(); ?></h4>
		</a>
		<!-- /post title -->
		
		<!-- post details -->
		<h5 class="date">
			<?php echo the_time( 'F j, Y' ); ?><?php esc_html_e(' &nbsp;| &nbsp;'); ?><?php the_category(', '); ?>
		</h5>
		<!-- /post details -->
		
		<a class="readMore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'osp'); ?></a>
	</li>
	
	<?php endwhile; ?>
	
</ul>	
<?php endif; wp_reset_postdata(); ?>