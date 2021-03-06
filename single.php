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
                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="20" width="100%" data-colorscheme="light" data-version="v2.3"></div>

                         <?php  $i++;  endwhile; endif;  ?>

                            <?php
                            $categories = get_the_category($post->ID);
                            if ($categories)
                            {
                                $category_ids = array();
                                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                                $args=array(
                                    'category__in' => $category_ids,
                                    'post__not_in' => array($post->ID),
                                    'showposts'=>4, // Số bài viết bạn muốn hiển thị.
                                    'caller_get_posts'=>1
                                );
                                $my_query = new wp_query($args);
                                if( $my_query->have_posts() )
                                {
                                    echo '<h3>Bài viết liên quan</h3><ul>';
                                    ?>
                                    <hr>
                                    <div class="row">
                                        <?php
                                        while ($my_query->have_posts())
                                        {
                                            $my_query->the_post();
                                            ?>
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="mkdf-item-text-holder">
                                                    <div class="images-wrap">
                                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?>
                                                    </div>
                                                    <br>
                                                    <p>
                                                        <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <?php
                                        }?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

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