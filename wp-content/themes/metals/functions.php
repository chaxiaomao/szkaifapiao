<?php

 function wheatv_breadcrumbs() {
  $delimiter = ' > ';
  $name = '首页'; //
 
  if ( !is_home() ||!is_front_page() || is_paged() ) {
 
    global $post;
    $home = get_bloginfo('url');
    echo '<a href="' . $home . '"  class="gray">' . $name . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo single_cat_title();
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '"  class="gray">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '"  class="gray">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo get_the_time('d');
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '"  class="gray">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo get_the_time('F');
 
    } elseif ( is_year() ) {
      echo get_the_time('Y');
 
    } elseif ( is_single() ) {
      $cat = get_the_category(); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo "正文";
 
    } elseif ( is_page()||!$post->post_parent ) {
      the_title();
 
    } elseif ( is_page()||$post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="http://www.wheatv.com/site/wp-admin/ . get_permalink($page->ID) . "  class="gray">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      the_title();
 
    } elseif ( is_search() ) {
      echo get_search_query();
 
    } elseif ( is_tag() ) {
      echo single_tag_title();
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo '由'.$userdata->display_name.'发表';
 
    } elseif ( is_404() ) {
      echo '404 错误';
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo '第' . ' ' . get_query_var('paged').' 页';
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
  }else{
    echo $name;
  }
}


?>