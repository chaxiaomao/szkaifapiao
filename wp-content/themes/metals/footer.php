<div id="nav">
<?php if(is_home()){?>

<a href="http://www.wpbaike.com" target="_blank">wordpress</a>
<?php get_links('-1', '', '', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>

<?php }else {?>
<a href="#" target="_blank">公司概况</a> ‖ <a href="#" target="_blank">技术中心</a> ‖ <a href="#" target="_blank">工程案例</a> ‖ <a href="#" target="_blank">购买指南</a> ‖ <a href="#" target="_blank">新闻动态</a> ‖ ‖

<?php }?>
</div>
<div id="bottom">
<div id="bottom-body"><p>

 <a href="<?php echo get_option('home'); ?>/sitemap.html">百度地图</a> | <a href="<?php echo get_option('home'); ?>/sitemap.xml">谷歌地图</a> | <a href="<?php echo get_option('home'); ?> ">全站链接1</a> | <a href="<?php echo get_option('home'); ?> ">全站链接1</a> | <a href="<?php echo get_option('home'); ?> ">全站链接1</a> | <a href="<?php echo get_option('home'); ?> ">全站链接1</a></p>
<p>WP百科网首发http://www.wpbaike.com<br />
CopyRight &copy; 2011 </p></div>
</div>
</body>
</html>