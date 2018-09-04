<?php get_header();?>
<div id="products-list">
<div id="list-content"><div id="boxtop"><span><?php wheatv_breadcrumbs(); ?></span><?php wp_title('');?>：</div>
<div id="list-a">

</div><div style="clear:both"></div>
</div>
</div>
<div id="dianye">
<div id="dianye-xiangxi"><h3><?php the_title_attribute(); ?></h3>

对不起，您要访问的页面不存在了。

</div>
</div>
<div id="products">
<div id="products-content"><h3>产品展示</h3>
<ul>

<?php if(function_exists('wp_thumbnails_for_related_posts')) { wp_thumbnails_for_related_posts();} ?>
</ul><div style="clear:both"></div>
</div>
</div>
<?php get_sidebar();?>
<div id="kf"><img src="<?php bloginfo('template_directory'); ?>/images/kf.gif" /></div>
<?php get_footer();?>