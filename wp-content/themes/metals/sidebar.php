<?php
$cat_links=get_category_link('10');//这里修改分类的ID
?>
<div id="info">
<div id="info-help"><div id="help"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>分类目录1</div>
<?php if (have_posts()) : ?>
<?php query_posts('cat=1&showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>
<ul>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 30, ''); ?></a><span><?php the_time('d') ?>日</span></li>		
</ul>
<?php endwhile; ?>
<?php else : ?>
<?php endif; wp_reset_query();?>
</div>
<?php
$cat_links=get_category_link('10');//这里修改分类的ID
?>
<div id="info-tongzhi">
<div id="tongzhi"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>分类目录2</div>
<?php if (have_posts()) : ?>
<?php query_posts('cat=1&showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>
<ul>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 30, ''); ?></a><span><?php the_time('d') ?>日</span></li>		
</ul>
<?php endwhile; ?>
<?php else : ?>
<?php endif; wp_reset_query();?>
</div>
<?php
$cat_links=get_category_link('1');//这里修改分类的ID
?>
<div id="info-anli">
<div id="news"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>分类目录3</div>
<?php if (have_posts()) : ?>
<?php query_posts('cat=1&showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>
<ul>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 30, ''); ?></a><span><?php the_time('d') ?>日</span></li>		
</ul>
<?php endwhile; ?>
<?php else : ?>
<?php endif; wp_reset_query();?>
</div><div style="clear:both"></div>
</div>