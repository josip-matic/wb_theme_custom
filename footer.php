
			<div class="container">

				<div class="row">
					<div class="col">

						<!-- footer -->
						<footer class="footer" role="contentinfo">

							<div class="row">
								<div class="col-md-3">
									<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1')) ?>
								</div>
								<div class="col-md-3">
									<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2')) ?>
								</div>
								<div class="col-md-3">
									<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3')) ?>
								</div>
								<div class="col-md-3">
									<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4')) ?>
								</div>
							</div>

							<!-- copyright -->
							<p class="copyright">
								&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
								<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="https://webbite.de/" title="Webbite Wordpress Theme">Webbite Media GmbH</a>.
							</p>
							<!-- /copyright -->

						</footer>
						<!-- /footer -->

					</div>

				</div>
			</div>


		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- Google can go here analytics -->
		<script>
		</script>

	</body>
</html>
