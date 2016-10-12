<section class="content-block bor-t bor-b">
       <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title-block text-center ">
                        <h3 class="section-title">Tin tức</h3>
                        <p class="section-subtitle"> </p>
                    </div>
                </div>
                <?php
					$category_id = get_cat_ID('Tin tức');
					$i=0;
					$catquery = new WP_Query( 'cat=' .$category_id. '&posts_per_page=3' );
					while($catquery->have_posts()) : $catquery->the_post();$i++;
					$title  = the_title($before = '', $after = '', $echo = false);
					$category = get_the_category(); 
					foreach($category as $cat){
						$link_cat = get_site_url().'/'.$cat->slug;
						if($cat->name!="Mới nhất") 	$cat_res = '<span class="mkdf-post-item-author-name">'.$cat->name.'</span>';
			
					}
							
				?>
                <div class="col-xs-12 col-sm-4">
                    <div class="mkdf-blog-list-item-inner wow fadeInUpBig" data-wow-delay="0s">
                        <div class="mkdf-item-text-holder">
                           <div class="images-wrap">
                                <img height="216px" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
                            </div>
                            <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div>
                            <div class="mkdf-item-date">
                                <time itemprop="datePublished" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y-m-d') ?></time>
                            </div>
                            <h3 itemprop="headline" class="mkdf-item-title">
                                <a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                            </h3>
                            <p itemprop="description" class="mkdf-excerpt"><?php the_excerpt();?></p>
                            <div class="mkdf-post-item-author-holder">
                                <a itemprop="url" href="<?php the_permalink(); ?>"> <?php echo $cat_res;?></a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <?php  endwhile; ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <div class="" style="margin-top: 40px;">
                        <a href="<?php echo esc_url(home_url( '/' )) ;?>blog-affiliate" class="btn at-btn outline-blue">Xem thêm</a>
                    </div>
                </div>
            </div>

        </div>

        
    </section>