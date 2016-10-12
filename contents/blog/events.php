  <section class="content-block bk-grey bor-t bor-b">
       <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title-block text-center ">
                        <h3 class="section-title">SỰ KIỆN ĐẶC BIỆT</h3>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="owl-event" class="owl-carousel">
						 <?php
                        $category_id = get_cat_ID('Sự kiện');
                        $i=0;
                        $catquery = new WP_Query( 'cat=' .$category_id. '&posts_per_page=8' );
                        while($catquery->have_posts()) : $catquery->the_post();$i++;
                        $title  = the_title($before = '', $after = '', $echo = false);
                        $category = get_the_category(); 
                        foreach($category as $cat){
                        $link_cat = get_site_url().'/'.$cat->slug;
                        if($cat->name!="Mới nhất") 	$cat_res = '<a href="'.$link_cat.'" rel="category tag">'.$cat->name.'</a>';
                        
                        }
                        
                        ?>
                        <div class="item text-center">
                            <div class="mkdf-blog-list-item-inner">
                                <div class="mkdf-item-text-holder">
                                      <div class="event-block">
                                          <?php the_post_thumbnail('post-thumbnails');?>
                                      </div>
                                   
                                    <h3 itemprop="headline" class="mkdf-item-title">
                                        <a itemprop="url" href="<?php the_permalink(); ?>"><?php string_limit_words($title,19);?></a>
                                    </h3>
                                  
                                </div>
                            </div>
                        </div>                        
                            
         			 <?php  endwhile; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>