			<div id="sidebar" class="right">
            
            <div class="box">
					<div class="box_title">Search</div>
					<div class="box_body">
						<form method="get" id="searchform" action="<?php bloginfo('url');?>">
						<div>
							<table class="search">
							<tr>
								<td><input type="text" value="" name="s" id="s" /></td>
								<td style="padding-left: 10px">
                              	<input type="submit" id="searchsubmit-head" value="go" /></td>
							</tr>
							</table>
						</div>
						</form>
					</div>
					<div class="box_bottom"></div>
				</div>
<!-- script to change themes dynamically <php switch_theme('colorvoid2','colorvoid2'); ?> -->
    
	 <?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('sidebar1') ) : ?>

			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p><?php printf(__('You are currently browsing the archives for the %s category.', 'glass'), single_cat_title('', false)); ?></p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the day %3$s.', 'glass'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('l, F jS, Y', 'glass'))); ?></p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for %3$s.', 'glass'), get_bloginfo('url'), get_bloginfo('name'), get_the_time(__('F, Y', 'glass'))); ?></p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives for the year %3$s.', 'glass'), get_bloginfo('url'), get_bloginfo('name'), get_the_time('Y')); ?></p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p><?php printf(__('You have searched the <a href="%1$s/">%2$s</a> blog archives for <strong>&#8216;%3$s&#8217;</strong>. If you are unable to find anything in these search results, you can try one of these links.', 'glass'), get_bloginfo('url'), get_bloginfo('name'), wp_specialchars(get_search_query(), true)); ?></p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p><?php printf(__('You are currently browsing the <a href="%1$s/">%2$s</a> blog archives.', 'glass'), get_bloginfo('url'), get_bloginfo('name')); ?></p>

			<?php } ?>

			</li> <?php }?>

			<?php wp_list_pages('title_li=<h2>' . __('Pages', 'glass') . '</h2>' ); ?>

			<li><h2><?php _e('Archives', 'glass'); ?></h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2>' . __('Categories', 'glass') . '</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2><?php _e('Meta', 'glass'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional', 'glass'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>', 'glass'); ?></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="<?php _e('XHTML Friends Network', 'glass'); ?>"><?php _e('XFN', 'glass'); ?></abbr></a></li>
					<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'glass'); ?>">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
            </div>
			<!-- side_bar -->

		<div class="clearer">&nbsp;</div>