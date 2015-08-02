	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Content')) : ?>xxx<?php endif; ?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<h1 class="entry-title" style="
			position: absolute;
			right: 1em;
			background-color: #DE5D8D;
			font-size: 2em;
			transform: skew(10deg) rotate(10deg);">It’s all about the fun</h1>
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<h6><a href="/"><span class="two-ex">&copy;</span> Copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> professional wedding photographers</a></h6>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
