<?php get_header();?>
<div id="products-list">
<div id="list-content"><div id="boxtop"><span><?php wheatv_breadcrumbs(); ?></span>快速导航：</div>
<div id="list-a">
<?php
$args=array(
  'orderby' => 'name',
  'order' => 'ASC'
  );
$categories=get_categories($args);
  foreach($categories as $category) { 
    echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
    } 
?>
</div><div style="clear:both"></div>
</div>
</div>
<div id="dianye">
<div id="dianye-xiangxi"><h3><?php the_title_attribute(); ?></h3>

	<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<p><?php the_content("Read More..."); ?></p>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

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