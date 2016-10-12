<div class="widget mkdf-latest-posts-widget">
    <h4><span class="mkdf-sidearea-title">bài đăng phổ biến</span><span class="mkdf-sidearea-line"></span></h4>
    <div class="mkdf-blog-list-holder  mkdf-image-in-box">
        <ul class="mkdf-blog-list">
         <?php
            $category_id = get_cat_ID('Tin tức');
            $i=0;
            $catquery = new WP_Query( 'cat=' .$category_id. '&posts_per_page=4' );
            while($catquery->have_posts()) : $catquery->the_post();$i++;
            $title  = the_title($before = '', $after = '', $echo = false);
            $category = get_the_category(); 
            foreach($category as $cat){
            $link_cat = get_site_url().'/'.$cat->slug;
            if($cat->name!="Mới nhất") 	$cat_res = '<a href="'.$link_cat.'" rel="category tag">'.$cat->name.'</a>';
            
            }
            
            ?>
            <li class="mkdf-blog-list-item clearfix post type-post status-publish format-standard has-post-thumbnail hentry category-website tag-analytics tag-keyword">
                <div class="mkdf-blog-list-item-inner">
                    <div class="mkdf-item-image clearfix" itemprop="image">
                        <a itemprop="url" href=""> <?php the_post_thumbnail('news-post',array( 'class' => 'wp-post-image'));?></a>
                    </div>
                    <div class="mkdf-item-text-holder">
                        <h6 itemprop="headline" class="mkdf-item-title"> <a itemprop="url" href="<?php the_permalink(); ?>"> <?php the_title();?></a></h6>
                        <div class="mkdf-item-date">
                            <time itemprop="datePublished" datetime="<?php the_time('Y/m/d') ?>"> <?php the_time('Y/m/d') ?> </time>
                        </div>
                    </div>
                </div>
            </li>
         <?php  endwhile; ?>
        </ul>
    </div>
</div>