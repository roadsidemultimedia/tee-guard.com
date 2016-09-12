<?php if (is_404()) { header("HTTP/1.1 404 Not Found"); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <h1 id="title"><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
        <div id="topmenu">
            <ul>
			<li><a href="#">Pages</a>
                <ul>
                    <?php wp_list_pages('title_li=&depth=1' ); ?>
                </ul>
			</li>
			<li><a href="#">Categories</a>
				<ul>
					<?php list_cats(0, '', 'name', 'asc', '', 1, 0, 0, 1, 1, 1, 0,'','','','','') ?>
				</ul>
			</li>
			<li><a href="#">Archives</a>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
		</ul>
        </div>
        <div id="headerimage"></div>
    </div>
    <?php get_sidebar(); ?>