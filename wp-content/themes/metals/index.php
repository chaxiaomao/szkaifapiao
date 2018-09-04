<?php get_header();?>
<div id="banner">
<div id="banner-left"><script language="javascript" src="<?php bloginfo('template_directory'); ?>/images/flash.js" type="text/javascript"></script></div>
<div id="banner-right"><img src="<?php bloginfo('template_directory'); ?>/images/zp.gif" /></div><div style="clear:both"></div>
</div><div id="main">
<div id="main-about"><h3>关于我们</h3>
  <p>在index.php中修改。</p>
  <p>大家好，欢迎来到WP百科网。   随着wordpress在国内的发展，越来越多的人开设了自己的个人博客。wordpress因其强大的插件和模板，满足了很多人对建站的要求。  wordprsss的主题样式繁多、品质可嘉，因此很多朋友也都希望打造属于自己的独一无二的博客。但是看到代码就发晕的新手朋友们，在  php，div，css，html等技术前面就不敢下手了。   其实制作wordpress主题并不是想象中的那么难，你不需要学透php、html等技术，而只需要看懂最基本的html几个标签，把我们提供的代码调  用标签用熟，化繁为简，就可以打造一个属于自己的漂亮主题。 希望我们的帮助，能让菜鸟也能快速制作出各种类型的模板。</p>
</div>
<?php
$cat_links=get_category_link('1');//这里修改分类的ID
?>
<div id="main-news"><div id="boxtop"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>新闻动态</div>
<ul>


<?php if (have_posts()) : ?>
<?php query_posts('cat=1&showposts=9'); ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 30, ''); ?></a><span><?php the_time('d') ?>日</span></li>
<?php endwhile; ?>
<?php else : ?>
<?php endif; wp_reset_query();?>

</ul>

</div>


<div style="clear:both"></div></div>
<div id="products">
<div id="products-content"><h3>产品展示</h3>
<ul>
<?php if(function_exists('wp_thumbnails_for_recent_posts')) { wp_thumbnails_for_recent_posts(); } ?>

</ul><div style="clear:both"></div></div></div>
<div id="info">
<?php
$cat_links=get_category_link('1');//这里修改分类的ID
?>
<div id="info-help"><div id="boxtop"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>分类目录1</div>
<ul>
<?php if (have_posts()) : ?>
<?php query_posts('cat=1&showposts=6'); ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 34, ''); ?></a><span><?php the_time('d') ?>日</span></li>		


<?php endwhile; ?>
<?php else : ?>
<?php endif;wp_reset_query(); ?>
</ul>
</div>
<div id="info-tongzhi">
<?php
$cat_links=get_category_link('2');//这里修改分类的ID
?>
<div id="boxtop"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>分类目录2</div>
<ul>
<?php if (have_posts()) : ?>
<?php query_posts('cat=1&showposts=6'); ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 34, ''); ?></a><span><?php the_time('d') ?>日</span></li>	
<?php endwhile; ?>
<?php else : ?>
<?php endif;wp_reset_query(); ?>
</ul>
</div>
<div id="info-anli">
<?php
$cat_links=get_category_link('3');//这里修改分类的ID
?>
<div id="boxtop"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>分类目录3</div>
<div id="daili">
<?php if (have_posts()) : ?>
<?php query_posts('cat=1&showposts=7'); ?>
<?php while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 34, ''); ?></a>
<?php endwhile; ?>
<?php else : ?>
<?php endif;wp_reset_query(); ?>
</div>
</div><div style="clear:both"></div>
</div>
<div id="kf"><img src="<?php bloginfo('template_directory'); ?>/images/kf.gif" /></div>
<?php get_footer();?>