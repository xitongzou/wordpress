<?php get_header(); ?>

			<div id="content" class="left">

	<?php if (have_posts()) : ?>

		<h2 class="archivetitle"><?php _e('Search Results',"glass"); ?></h2>



		<?php while (have_posts()) : the_post(); ?>

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
				<?php the_excerpt(); ?>

					<div class="post_metadata">
							<div class="content">
								<div class="left">
									Posted in 	<?php printf( get_the_category_list(', ')); ?><span class="author"><?php printf(__(' by %s', 'glass'), the_author('',false) ); ?></span> | <?php the_tags(__('Tags:',"glass") . ' ', ', ', '<br />'); ?>								</div>
                                 
								<div class="right">
                                					<?php edit_post_link(__('Edit',"glass"), '', ''); ?> | 
									<span class="comment">
                                     <?php comments_popup_link(__('No Comments &#187;', 'glass'), __('1 Comment &#187;', 'glass'), __('% Comments &#187;', 'glass'), '', __('Comments Closed', 'glass') ); ?>
                                    </span>
								</div>
								<div class="clearer">&nbsp;</div>
							</div>
						</div>
					</div><!--/entry-->
		<div class="post_bottom"></div>
				</div>
		<?php endwhile; ?>

        
        				<div class="pagenavigation">
					<div class="pagenav">
						<div class="right"><?php next_posts_link(__('&laquo; Older Entries',"glass")) ?></div>
						<div class="left"><?php previous_posts_link(__('Newer Entries &raquo;',"glass")) ?></div>
                        <div class="clearer">&nbsp;</div>
					</div>
                   <div class="pagenav_bottom"></div>
				</div>

	<?php else : ?>

		<h2 class="center"><?php _e('No posts found. Try a different search?',"glass"); ?></h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
