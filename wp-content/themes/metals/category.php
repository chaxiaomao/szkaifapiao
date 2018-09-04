<?php get_header();?>
<div id="products">
<div id="products-content">
<div id="boxtop"><span><?php wheatv_breadcrumbs(); ?></span>快速导航：</div>
<ul>
<?php if(function_exists('wp_thumbnails_for_related_posts')) { wp_thumbnails_for_related_posts();} ?>
</ul><div style="clear:both"></div>
</div>
</div>
<div id="channpinshuoming">
<div id="shuoming-content"><h3><?php wp_title('');?>产品说明</h3> 
在category.php中添加分类产品的说明。
</div>
</div>
<?php get_sidebar();?>
<div id="kf"><img src="<?php bloginfo('template_directory'); ?>/images/kf.gif" /></div>
<?php get_footer();?>