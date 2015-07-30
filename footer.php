	<?php if (!function_exists('bottom_content')) : ?>xxx<?php endif; ?>

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
			<h6><a href="/"><span class="two-ex">&copy;</span> Copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></a></h6>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
