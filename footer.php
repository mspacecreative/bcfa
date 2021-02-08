		</div>
		<!-- /wrapper -->
		
		<!-- footer -->
		<footer class="footer" role="contentinfo">

			<div class="innerContainer">
				<div class="row">
					<!-- copyright -->
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p class="copyright">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo bloginfo( 'name' ); echo __('. All rights reserved.'); ?> <a href="<?php echo home_url('privacy-policy'); ?>"><?php echo _e('Privacy Policy &raquo;'); ?></a>.</p>
					</div>
					<!-- /copyright -->
					<!-- social media -->
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<?php get_template_part('templates/social-media-buttons'); ?>
					</div>
				</div>
			</div>
			
			<div class="page_bg_container">
				<?php get_template_part('assets/img/placeholders/wheat-bg'); ?>
			</div>
		<!-- /footer -->
			
		</footer>
			
		<?php wp_footer(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36691022-5"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-36691022-5');
		</script>

	</body>
</html>
