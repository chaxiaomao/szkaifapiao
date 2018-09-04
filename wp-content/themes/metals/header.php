<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title><?php if (is_home()||is_search()) { bloginfo('name'); } else { wp_title(''); print " - "; bloginfo('name'); } ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
<div id="top"></div>
<div id="header">
<div id="logo"><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="冲孔网金牌供应商" width="500" height="80" /></a></div>
<div id="tel"><img src="<?php bloginfo('template_directory'); ?>/images/tel.gif" alt="tel" width="337" height="32" /></div>
</div>
<div id="menu"><ul>
<li id="current"><a title="网站首页" href="<?php echo get_option('home'); ?>">网站首页</a> </li>
<?php wp_list_pages('sort_column=menu_order&title_li=&depth=2&include='); ?>
<?php
$categories=get_categories('include=1,12,18');
  foreach($categories as $category) {
        echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>';
  }
?>

</ul></div>