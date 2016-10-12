<?php get_header(); ?>
<?php /* Template Name: page QA Template */ ?>
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		$title  = the_title($before = '', $after = '', $echo = false);
	?>
    <section class="content-block bk-blue white-text">
       <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                    <h3 class="section-title"><?php echo $title ;?></h3>
                </div>

            </div>

        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="widget widget_privacy">
					<?php
                        wp_nav_menu(array(
                        'theme_location' => 'header-left',
                        'menu'            => 'header-left',
                        'container'       => '',
                        'menu_class'=> '',
                        'items_wrap'     => ' <ul>%3$s</ul>',
                        'fallback_cb' => 'td_wp_page_menu_left',
                        'walker' => new wp_bootstrap_navwalker()
                    ));

                    //if no menu
                    function td_wp_page_menu_left() {
                        //this is the default menu
                        echo '<ul>';
                        echo '<li><h2><a href="' . esc_url(home_url( '/' )) . '/wp-admin/nav-menus.php?action=locations">Click here - to select or create a menu</a></h2></li>';
                        echo '</ul>';
                    }

                    ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="wpb_wrapper">
                     <?php 	the_content();?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;?>

    <section class="content-block bk-blue white-text">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                    <div class="call-to">
                        <div class="call-to-btn" style="">
                            <a class="btn at-btn outline-white at-btn-lg" href="/site/register">Tham gia ngay</a>
                        </div>
                        <h3 class="text-up">Accesstrade để kiếm thật nhiều tiền</h3>
                    </div>
                </div>

            </div>

        </div>


    </section>

<?php get_footer(); ?>
