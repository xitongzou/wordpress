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

    function enableFollowNav(navElement) {

        var $sidebar = navElement,

            $window = $(window),

            offset = $sidebar.offset(),

            topPadding = 50,

	    sidePadding = 500;

	    winPadding = 2000;



        $window.scroll(function() {

            if ($window.scrollTop() > offset.top + winPadding) {

		navElement.css("position","fixed");

		navElement.css("top",topPadding+"px");

		navElement.css("right",sidePadding+"px");

		navElement.fadeIn();

            } else {

		navElement.fadeOut();

            }

        });

    }

$(function() {
if ($(window).width() > 640) {
$("#site-navigation").sticky({topSpacing:20});

   enableFollowNav($("#back-to-top"));

}
}
);

</script>

<?php wp_footer(); ?>

</body>

</html>