<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><?php if (is_home() || is_search()) {
            bloginfo('name');
        } else {
            wp_title('');
            print " - ";
            bloginfo('name');
        } ?> </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=7"/>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>
    <meta name='description' content='【微信电话:135/0968/2997沈先生,诚信经营，诚信合作】
公司代开深圳发票,机械设备发票、电器电子发票、工程发票、医疗设备发票、餐饮发票、酒店住宿发票、电子技术发票、建材发票等等。可货到网上验证,欢迎来电咨询! 【微信电话:135/0968/2997沈先生,诚信经营，诚信合作】
【可代开全国各地发票，上海，北京，深圳，广州，东莞，江苏，浙江等等】
哪里有发票卖，哪里能买到发票，请找我.能开全国各地的发票，经营范围多多!
公司代开上海发票,机械设备发票、电器电子发票、工程发票、医疗设备发票、餐饮发票、酒店住宿发票、电子技术发票、建材发票等。可货到网上验证,欢迎来电咨询! 【微信电话:135/0968/2997沈先生,诚信经营，诚信合作】

公司代开东莞发票,机械设备发票、电器电子发票、工程发票、医疗设备发票、餐饮发票、酒店住宿发票、电子技术发票、建材发票等。可货到网上验证,欢迎来电咨询! 【微信电话:135/0968/2997沈先生,诚信经营，诚信合作】

公司代开江苏发票,机械设备发票、电器电子发票、工程发票、医疗设备发票、餐饮发票、酒店住宿发票、电子技术发票、建材发票等。可货到网上验证,欢迎来电咨询! 【微信电话:135/0968/2997沈先生,诚信经营，诚信合作】
'/>
    <meta name='keyword' content='深圳开发票_发票新闻网'/>
    <title>深圳开发票_发票新闻网</title>
    <?php wp_head(); ?>
</head>
<body>
<div id="top"></div>
<div id="header">
    <div id="logo"><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"
                                             alt="深圳开发票_发票新闻网" width="500" height="80"/></a></div>
    <div id="tel"><img src="<?php bloginfo('template_directory'); ?>/images/tel.gif" alt="tel" width="337" height="32"/>
    </div>
</div>
<div id="menu">
    <ul>
        <li id="current"><a title="深圳开发票_发票新闻网" href="<?php echo get_option('home'); ?>">网站首页</a></li>
        <?php wp_list_pages('sort_column=menu_order&title_li=&depth=2&include='); ?>
        <?php
        $categories = get_categories('include=1,12,18');
        foreach ($categories as $category) {
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
        ?>

    </ul>
</div>