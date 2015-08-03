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
	function getOffset( el ) {
	    var _x = 0;
	    var _y = 0;
	    while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
	        _x += el.offsetLeft - el.scrollLeft;
	        _y += el.offsetTop - el.scrollTop;
	        el = el.offsetParent;
	    }
	    return { top: _y, left: _x };
	}
	// what should we do when scrolling occurs
	var locked = false;
	var runOnScroll =  function(evt) {
	  if(locked) return;
	  locked = true;
	  var x = getOffset( document.getElementById('main') ).top;
	  if (x > 0) {
	  	console.log('ping '+x);
	  } else {
	  	console.log('pong '+x);
	  }
	  locked = false;
	};

	// grab elements as array, rather than as NodeList
	var elements = document.querySelectorAll("body");
	elements = Array.prototype.slice.call(elements);

	// and then make each element do something on scroll
	elements.forEach(function(element) {
	  window.addEventListener("scroll", runOnScroll);
	});

</script>
</body>
</html>
