<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed',"glass"), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed',"glass"), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rev="made" href="http://www.blue-kaos.com" />
<link rel="shortcut icon" href="http://www.blue-kaos.com/favicon.ico" type="image/x-icon" /> 

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scroll.js"></script>
<style type="text/css">
<!--
* html .post-title-meta .meta-date {;
  filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_directory'); ?>/images/day_calendar.png',sizingMethod='scale');
}
-->
</style>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5028494-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
 <script src="http://static.ak.connect.facebook.com/connect.php/en_US" type="text/javascript"></script>
 <script type="text/javascript">FB.init("4e3ac4004a296834fb1b2f6976f387f9");</script>
<div id="outside">
<div id="layout_edgetop"></div>
	<div id="wrapper_page">
        	<div id="site_title">

		<h1 class="left"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<h2 class="right"><?php bloginfo('description'); ?></h2>

		<div class="clearer">&nbsp;</div>

	</div>
		<div id="top_separator"></div>
			<div id="navigation">
            <div id="tabs">

				<ul>
					<li><a href="<?php echo get_option('home'); ?>/">							                   	<span>Blog</span></a></li>
					<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>
                			<div class="clearer">&nbsp;</div>
                </div>
			</div>
		<div class="spacer h5"></div>
		<div id="wrapper-main">

