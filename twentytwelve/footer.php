<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div id="site-generator">
					<a href="#page" onclick="scrollup(); return false;">Return to pagetop</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script type="text/javascript">
$(function() {
$("#site-navigation").sticky({topSpacing:20});
}
);
</script>
<?php wp_footer(); ?>
</body>
</html>