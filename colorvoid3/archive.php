<?php get_header(); ?>

			<div id="content" class="left">

	<?php if (have_posts()) : ?>
	
		<?php if(is_archive()): ?>
		 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="archivetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category',"glass"), single_cat_title('', false)); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="archivetitle"><?php printf(__('Posts Tagged &#8216;%s&#8217;',"glass"), single_tag_title('', false) ); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="archivetitle"><?php printf(_c('Archive for %s|Daily archive page'), get_the_time(__('F jS, Y',"glass"))); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="archivetitle"><?php printf(_c('Archive for %s|Monthly archive page'), get_the_time(__('F, Y',"glass"))); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="archivetitle"><?php printf(_c('Archive for %s|Yearly archive page'), get_the_time(__('Y',"glass"))); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="archivetitle"><?php _e('Author Archive',"glass"); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="archivetitle"><?php _e('Blog Archives',"glass"); ?></h2>
 	  <?php } ?>
		<?php endif ; ?>

<?php echo "$ABSPATH";?>
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
					<?php the_content(__('Read the rest of this entry &raquo;',"glass")); ?>
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
						<div class="right"><?php if(next_posts_link('<p class="older">'.__('Older Entries',"glass").' </p>')) : ?><?php endif ; ?></div>
						<div class="left"><?php if(previous_posts_link('<p class="newer">'.__('Newer Entries',"glass").' </p>')) : ?><?php endif ; ?></div>
                        <div class="clearer">&nbsp;</div>
					</div>
                   <div class="pagenav_bottom"></div>
				</div>

	<?php else : ?>
				<div class="post">
					<div class="post-head">
					<h2 class="post-title"><?php _e('Not Found',"glass"); ?></h2>
					</div>
					<div class="entry">
					<p><?php _e('Sorry, but you are looking for something that isn&#8217;t here.',"glass"); ?></p>
					<?php include (TEMPLATEPATH . "/searchform.php"); ?>
					<?php wp_list_categories(''); ?>
					</div>
				</div>
	<?php endif; ?>
			</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
