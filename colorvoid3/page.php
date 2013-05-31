<?php get_header(); ?>

			<div id="content" class="left">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="post_title">
						<h1 class="left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'glass'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h1>
			</div>
			<div class="post_body">
				<?php the_content(__('Read the rest of this entry &raquo;', 'glass')); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:',"glass") . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<p><?php the_tags(__('Tags:', 'glass') . ' ', ', ', '<br />'); ?>

						<?php edit_post_link(__('Edit this entry', 'glass'),'','.'); ?></p>

			</div>
		<?php endwhile; endif; ?>

		</div>
			</div>

<?php if (is_page('about')) : ?>
    <?php include ('sidebar2.php'); ?>
<?php elseif (is_page('portfolio')) : ?>
    <?php include ('sidebar3.php'); ?>
<?php elseif (is_page('media')) : ?>
    <?php include ('sidebar4.php'); ?>
<?php elseif (is_page('181')) : ?>
    <?php include ('sidebar4.php'); ?>
<?php elseif (is_page('189')) : ?>
    <?php include ('sidebar4.php'); ?>
<?php elseif (is_page('170')) : ?>
    <?php include ('sidebar4.php'); ?>
<?php elseif (is_page('681')) : ?>
    <?php include ('sidebar4.php'); ?>
<?php elseif (is_page('868')) : ?>
	 <?php include ('sidebar4.php'); ?>
<?php elseif (is_page('871')) : ?>
	 <?php include ('sidebar4.php'); ?>
<?php else : ?>
    <?php include ('sidebar3.php'); ?>
<?php endif; ?>

<?php get_footer(); ?>
