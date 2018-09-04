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
<div id="info-list">
<div id="info-list-content"><h3><?php wp_title('');?></h3>

<?php if ($posts_perpage) { ?>
						<?php $postsperpage = $posts_perpage; ?>
                    <?php } else { ?>
                        <?php $postsperpage = 40; ?>
                    <?php } ?>
        	 
        	  <?php
						$categoryID=$cat;
						$wp_query = new WP_Query('cat=' . $categoryID. 'orderby=date&order=desc&posts_per_page='.$postsperpage.'&paged='.$paged); ?>
        	 
	<ul>

		<?php while (have_posts()) : the_post(); ?>
        
          
		<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><span><?php the_date_xml(); ?></span></li>

            
            <?php endwhile; ?>
</ul>

<div style="clear:both"></div></div>
<div id="fenye"><span class="k_pagelist"><em></em><strong></strong></span></div></div>
<div id="products">
<div id="products-content"><h3>产品展示</h3>
<ul>

<?php if(function_exists('wp_thumbnails_for_related_posts')) { wp_thumbnails_for_related_posts();} ?>
</ul><div style="clear:both"></div>
</div>
</div>
<div id="kf"><img src="<?php bloginfo('template_directory'); ?>/images/kf.gif" /></div>
<?php get_footer();?>