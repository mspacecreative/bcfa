<?php if ( have_rows('channels', 'options') ) : ?>
	<?php while ( have_rows('channels', 'options') ) : ?>
	<div class="socialMedia inline">
		<ul>
			<?php the_row();
			$link = get_sub_field('link', 'options');
			$icon = get_sub_field('icon', 'options'); ?>
								
			<li><a href="<?php echo $link ?>" target="_blank"><i class="fa <?php echo $icon ?>"></i></a></li>
		</ul>
	</div>
	<?php endwhile;
	else : ?>
	<p>Social Media buttons</p>
<?php endif; ?>