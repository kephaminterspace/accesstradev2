<section class="content-block campaign-block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="title-block text-center ">
					<h3 class="section-title">CÁC CHIẾN DỊCH NỔI BẬT</h3>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="portfolio-grid detailed col4">
				<div class="product-search">
					<input type="text" class="at-form-control" placeholder="Tìm chiến dịch...">
					<i class="icon-magnifier"></i>
				</div>
				<div class="isotope-filter button-group">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a class="button btn_campaign_filter" data-filter=".special" data-type="1">Chiến dịch đặc biệt</a></li>
						<li role="presentation"><a class="button btn_campaign_filter" data-filter=".new" data-type="2">Chiến dịch mới</a></li>
						<li role="presentation"><a class="button is-checked btn_campaign_filter" data-filter="*" data-type="0" id="showAll">Tất cả</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<div class="items-wrapper">
					<div class="isotope items">

						<?php wp_reset_postdata(); ?>
						<?php

							$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
							$args = array(
								'post_type'      => 'jetpack-portfolio',
								'posts_per_page' => 1000,
								'paged'          => $paged,

							);
							$project_query = new WP_Query( $args );
							while($project_query->have_posts()) : $project_query->the_post();$i++;

							$id = get_the_ID();
							// Get the link campaign
							$links_campaign =  get_field('links_campaign');
							// Get the category campaign
							$cat_campaign =  get_field('cat_campaign');

							$class = '';
							$cam = get_the_terms($id, 'jetpack-portfolio-type');
							foreach($cam as $cam)
							{
								if($cam->term_id == 112) {
									$class = "special";
								} elseif ($cam->term_id == 114) {
									$class = "new";
								}
							}

						?>
						<div class="item post <?php echo $class;?>">
							<figure>
								<a href="<?php echo $links_campaign;?>">
									<div class="overlay">
										<div class="info"><span class=""><i class="icon-link"></i><b class="link-bt">Tạo link</b></span></div>
							</div>
						  <?php  the_post_thumbnail("post-thumbnails");?></a>
							</figure>
							<div class="post-content">
								<h3 class="post-title">
								<a href="<?php echo $links_campaign;?>"><?php the_title();?></a></h3>
								<div class="meta"><span class="category"><a href="<?php echo $links_campaign;?>"><?php echo $cat_campaign;?> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cam/icon-hot.gif" alt="Icon Hot"></a></div>

							</div>

						</div>
						<?php endwhile;?>

					</div>

					 <!-- pagination here -->
					<?php
					  // if (function_exists(custom_pagination)) {
						// custom_pagination($project_query->max_num_pages,"",$paged);
					  // }
					?>

				  <?php wp_reset_postdata(); ?>

				</div>

			</div>
			</div>

			<div id="view-more">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="btnViewmore">
					<div class="" style="margin-top: 40px;">
						<a href="/publisher/cap-nhat-chien-dich" class="btn at-btn outline-blue">Xem thêm</a>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>

<script type="text/javascript">

	jQuery(document).ready(function() {

		var btnClass = $('a.btn_campaign_filter');
		btnClass.on('click', function() {
			var btnClassValue = $(this).attr('data-type');
			if (btnClassValue == 0) {
				var html = '';
				html += '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="btnViewmore">';
				html += 	'<div class="" style="margin-top: 40px;">';
				html += 		'<a href="/publisher/cap-nhat-chien-dich" class="btn at-btn outline-blue">Xem thêm</a>';
				html +=		'</div>';
				html +=	'</div>';

				$('#view-more').html(html);
			} else if (btnClassValue == 1 || btnClassValue == 2) {
				$('#view-more #btnViewmore').remove();
			}

		});


	});


</script>
