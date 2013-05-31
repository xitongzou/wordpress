<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>

			<div id="content" class="left">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="post_title">
						<h1 class="left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'glass'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
			</div>
			<div class="post_body">
				<?php the_content(__('Read the rest of this entry &raquo;', 'glass')); ?>
				<h3><?php _e('Links:',"glass"); ?></h3>
				<ul class="bookmarks">
				<?php wp_list_bookmarks('between=<br />&title_before=<h4>&title_after=</h4>&show_description=1&show_images=0&orderby=id&show_rating=0&show_updated=1'); ?>
				</ul>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:',"glass") . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<p><?php the_tags(__('Tags:', 'glass') . ' ', ', ', '<br />'); ?>

						<?php edit_post_link(__('Edit this entry', 'glass'),'','.'); ?></p>

			</div>
		<?php endwhile; endif; ?>
			<?php comments_template(); ?>

		</div>
			</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
