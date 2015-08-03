	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Content')) : ?><?php endif; ?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : ?><?php endif; ?>
			<h6><a href="/"><span class="two-ex">&copy;</span> Copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> professional wedding photographers</a></h6>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
<script>
	$(document).ready(function() {
		$(window).scroll(function() {
			console.log('check');
		});
	});
</script>
</body>
</html>
