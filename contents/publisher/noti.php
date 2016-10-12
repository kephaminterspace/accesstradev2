<section class="noti-block bk-grey bor-b">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="noti-block-info">            
            <?php
			$category_id = get_cat_ID('Chính sách và thông báo');
			$i=0;
			$catquery = new WP_Query( 'cat=' .$category_id. '&posts_per_page=1' );
			while($catquery->have_posts()) : $catquery->the_post();$i++;
			$title  = the_title($before = '', $after = '', $echo = false);
			$category = get_the_category(); 
			foreach($category as $cat){
			$link_cat = get_site_url().'/'.$cat->slug;
			if($cat->name!="Mới nhất") 	$cat_res = '<a href="'.$link_cat.'" rel="category tag">'.$cat->name.'</a>';
			
			}
			
			?>
                <span href="" class="sub-text"><i class="icon-tag"></i>Thông báo : <a href="<?php the_permalink(); ?>"><?php the_title();?></a></span>
            <?php  endwhile; ?>
            </div>
        </div>
    </div>
</section>