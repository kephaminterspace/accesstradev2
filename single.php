<?php get_header(); ?>

  <section class="content-block bk-grey bor-t bor-b breadcrumb-block">
        <div class="container">
            <div class="row">
      
                <div class="col-xs-12 ">
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
                <div class="col-xs-12 col-sm-8">
                 <?php
				  $i = 0;
				  if ( have_posts() ) : while ( have_posts() ) : the_post();
				    $category = get_the_category(); 
					foreach($category as $cat){
					$link_cat = get_site_url().'/'.$cat->slug;
					$cat_res = '<a itemprop="url"  style="float: right;" href="'.$link_cat.'">'.$cat->name.'</a>';
		
					}
					
				?>
                        <div class="mkdf-blog-list-item-inner blog-list">
                            <div class="mkdf-item-text-holder">
                               <div class="images-wrap">
                                 	  <?php the_post_thumbnail('medium_large',array( 'class' => ''));?>
                                </div>
                                <div class="mkdf-item-date">
                                    <time itemprop="datePublished" datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y-m-d');?></time>
                                    <?php echo $cat_res; ?>
                                </div>
                                <h3 itemprop="headline" class="mkdf-item-title">
                                    <a itemprop="url" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                                </h3>
                                <?php the_content(); ?>
                                <div class="mkdf-post-item-author-holder">
                                    <?php
									$td_post_tags = get_the_tags();
											if ($td_post_tags) {
												foreach ($td_post_tags as $tag) {
													$buffy .=  '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>, ';
												}
											}
									echo   $buffy;
									?>                
                                </div>
                            </div>
                        </div>
                         <?php  $i++;  endwhile; endif;  ?>
                    </div>
                
                <div class="col-xs-12 col-sm-4">
                      <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </section>


    <section class="content-block bk-blue white-text">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                    <div class="call-to">
                        <div class="call-to-btn" style="">
                            <a href="<?php echo esc_url(home_url( '/' )) ;?>site/register" class="btn at-btn outline-white at-btn-lg">Tham gia ngay</a>
                        </div>
                        <h3 class="text-up">Accesstrade để kiếm thật nhiều tiền</h3>
                    </div>
                </div>

            </div>

        </div>


    </section>
<?php get_footer(); ?>