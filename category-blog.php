<?php get_header(); ?>

  <section class="content-block bk-grey bor-t bor-b breadcrumb-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <span class="breadcrumb-title"><?php echo  single_cat_title();?></span>
                </div>
                <div class="col-xs-12 col-sm-6 breadcrumb-li">
                    <ul class="clearfix">
                     <?php 
					 	if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('<li>','</li>');
						}
					?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="mkdf-blog-list-item-inner blog-list">
                        <div class="row">
                        <?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();            
							$title  = the_title($before = '', $after = '', $echo = false);
							$category = get_the_category(); 
							foreach($category as $cat){
							$link_cat = get_site_url().'/'.$cat->slug;
							$cat_res = '<a itemprop="url" href="'.$link_cat.'"><span class="mkdf-post-item-author-name">'.$cat->name.'</span></a>';
				
							}
							?>                        
                            <div class="col-xs-12 col-sm-4">
                                <div class="mkdf-item-text-holder">
                                    <div class="images-wrap">
                                        <?php the_post_thumbnail('post-thumbnails');?>
                                    </div>
                                    <div class="mkdf-item-date">
                                        <time itemprop="datePublished" datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y-m-d');?></time>
                                    </div>
                                    <h3 itemprop="headline" class="mkdf-item-title">
                                   		<a itemprop="url" href="<?php the_permalink(); ?>"><?php string_limit_words($title,9);?></a>
                                	</h3>
                                    <p itemprop="description" class="mkdf-excerpt"><?php the_excerpt();?> </p>
                                    <div class="mkdf-post-item-author-holder">
                                        <?php echo $cat_res;?>
                                    </div>
                                </div>
                            </div>
      					 <?php  endwhile; endif;  ?>
                        </div>
                    </div>
                    <div class="mkdf-pagination">
                    
                      	<?php echo bittersweet_pagination(); ?> 
                       
                    </div>
                </div>

               

            </div>
        </div>
    </section>

        
    <section class="content-block bk-green white-text">
       <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                   
                    <div class="call-to">
                       <div class="call-to-btn" style="">
                            <a href="<?php echo esc_url(home_url( '/' )) ;?>site/maregister" class="btn at-btn outline-white at-btn-lg">Hợp tác ngay</a>
                        </div>
                        <h3 class="text-up">Accesstrade để tăng trưởng doanh thu đột phá</h3>
                    </div>
                </div>

            </div>

        </div>

        
    </section>
<?php get_footer(); ?>