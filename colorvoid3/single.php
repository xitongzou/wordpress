<?php get_header(); ?>

			<div id="content" class="left">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
					<div class="post_title">
						<h1 class="left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s',"glass"), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
                       <div class="post_date right">
                       	<span class="month"><?php the_time(__('M',"glass")) ?></span>
							<span class="date"><?php the_time(__('d',"glass")) ?></span>
							<span class="year"><?php the_time(__('Y',"glass")) ?></span>
                       </div>
						<div class="clearer">&nbsp;</div>
                       
					</div>
					<div class="post_body">
					<?php the_content(__('Read the rest of this entry &raquo;', 'glass')); ?>
                    
                        	<div class="post_metadata">
							<div class="content">
								<div class="left">
					<?php the_tags(__('Tags:', 'glass') . ' ', ', ', '<br />'); ?>
														
								</div>
								<div class="right">
                                <?php if (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							<?php printf(__('Comments Off', 'glass'), trackback_url(false)); ?>

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							<?php _e('Pings Off.', 'glass'); ?>

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							<?php _e('Comments Off , Pings Off.', 'glass'); ?>
                                
                     	<?php } edit_post_link(__('Edit this entry', "glass"),'','.'); ?>
								</div>
								<div class="clearer">&nbsp;</div>
						</div>
					</div><!--/entry-->
		<div class="post_bottom"></div>
				</div>

		<?php if(get_next_post() || get_previous_post()) : ?>
        		<div class="pagenavigation">
					<div class="pagenav">
						<div class="right"><?php if(next_post_link('<p class="newer">'.__('Newer :',"glass").' %link </p>')) : ?><?php endif ; ?></div>
						<div class="left">	<?php if(previous_post_link('<p class="older">'.__('Older :',"glass").' %link </p>')) : ?><?php endif ; ?></div>
                        <div class="clearer">&nbsp;</div>
					</div>
                   <div class="pagenav_bottom"></div>
				</div>

		<?php endif; ?>
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.', 'glass'); ?></p>

	<?php endif; ?>

				</div>
			</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
