<?php get_header(); ?>

    <div id="main">
        <div id="main-about"><h3>关于我们</h3>
<!--            <p>深圳开发票</p>-->
            <p>
                <span style="color: red;">【微信电话:135/0968/2997沈先生,诚信经营，诚信合作】</span>
                公司代开深圳发票,机械设备发票、电器电子发票、工程发票、医疗设备发票、餐饮发票、酒店住宿发票、电子技术发票、建材发票等等。可货到网上验证,欢迎来电咨询!
            </p>
            <p>
                <span style="color: red;">【微信电话:135/0968/2997沈先生,诚信经营，诚信合作】</span>
                【可代开全国各地发票，上海，北京，深圳，广州，东莞，江苏，浙江等等】
            </p>
            <p>
            </p>
            <p>
                <span style="color: red;">【微信电话:135/0968/2997沈先生,诚信经营，诚信合作】</span>
                公司代开上海发票,机械设备发票、电器电子发票、工程发票、医疗设备发票、餐饮发票、酒店住宿发票、电子技术发票、建材发票等。可货到网上验证,欢迎来电咨询!
            </p>
        </div>
        <?php
        $cat_links = get_category_link('1');//这里修改分类的ID
        ?>
        <div id="main-news">
            <div id="boxtop"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>新闻动态</div>
            <ul>


                <?php if (have_posts()) : ?>
                    <?php query_posts('cat=1&showposts=9'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink() ?>" rel="bookmark"
                               title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 30, ''); ?></a><span><?php the_time('d') ?>
                                日</span></li>
                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif;
                wp_reset_query(); ?>

            </ul>

        </div>


        <div style="clear:both"></div>
    </div>
    <div id="products">
        <div id="products-content"><h3>
                <span style="color: red;">哪里有发票卖，哪里能买到发票，请找我.能开全国各地的发票，经营范围多多!</span>
            </h3>
            <ul>
                <?php if (function_exists('wp_thumbnails_for_recent_posts')) {
                    wp_thumbnails_for_recent_posts();
                } ?>

            </ul>
            <div style="clear:both"></div>
        </div>
    </div>
    <div id="info">
        <?php
        $cat_links = get_category_link('1');//这里修改分类的ID
        ?>
        <div id="info-help">
            <div id="boxtop"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>相关分类</div>
            <ul>
                <?php if (have_posts()) : ?>
                    <?php query_posts('cat=1&showposts=6'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink() ?>" rel="bookmark"
                               title="<?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 34, ''); ?></a><span><?php the_time('d') ?>
                                日</span></li>


                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif;
                wp_reset_query(); ?>
            </ul>
        </div>
        <div id="info-tongzhi">
            <?php
            $cat_links = get_category_link('2');//这里修改分类的ID
            ?>
            <div id="boxtop"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>相关文章</div>
            <ul>
                <?php if (have_posts()) : ?>
                    <?php query_posts('cat=1&showposts=6'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink() ?>" rel="bookmark"
                               title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 34, ''); ?></a><span><?php the_time('d') ?>
                                日</span></li>
                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif;
                wp_reset_query(); ?>
            </ul>
        </div>
        <div id="info-anli">
            <?php
            $cat_links = get_category_link('3');//这里修改分类的ID
            ?>
            <div id="boxtop"><span><a href="<?php echo $cat_links; ?>">更多&raquo;</a></span>相关新闻</div>
            <div id="daili">
                <?php if (have_posts()) : ?>
                    <?php query_posts('cat=1&showposts=7'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink() ?>" rel="bookmark"
                           title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 34, ''); ?></a>
                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif;
                wp_reset_query(); ?>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
    <div id="kf"><img src="<?php bloginfo('template_directory'); ?>/images/kf.gif"/></div>
<?php get_footer(); ?>