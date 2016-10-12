<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cropped-favicon-1-32x32.png">
    <link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/wow-master/css/libs/animate.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/simple-line-icons-master/css/simple-line-icons.css">
    <!--    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/css3-animate-it.css">-->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/animateSlider/css/jquery.animateSlider.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/themify-icons/themify-icons.css">



    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/at-style.css">
</head>

<body>
  <?php
	if ( is_home() ) {
		// This is the blog posts index
	   get_template_part('contents/publisher/header');
	} else {
		// This is not the blog posts index
	   get_template_part('contents/blog/header');
	}
	?>


    <section class="content-block bk-blue white-text">
       <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                    <h3 class="section-title">DÀNH CHO ĐỐI TÁC</h3>
                        <p class="section-subtitle">Cập nhật chính sách, sự kiện dành riêng cho Đối tác của ACCESSTRADE</p>
                </div>

            </div>

        </div>
    </section>

 <?php get_template_part('contents/publisher/noti'); ?>

    <section class="content-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title-block text-center ">
                        <h3 class="section-title">CHÍNH SÁCH THANH TOÁN HOA HỒNG</h3>
                        <p class="section-subtitle">Thời hạn thanh toán sớm nhất thị trường, cam kết đúng hẹn vào ngày 15 hàng tháng. <b>Tỷ lệ hoa hồng hấp dẫn lên tới 21%.</b></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="wpb_wrapper">
                        <div class="mkdf-comparision-pricing-tables-holder mkdf-three-columns">
                            <div class="mkdf-cpt-features-holder mkdf-cpt-table">
                                <div class="mkdf-cpt-table-border-top" style="background-color: #cccccc"></div>
                                <div class="mkdf-cpt-features-title mkdf-cpt-table-head-holder">
                                    <div class="mkdf-cpt-table-head-holder-inner">
                                        <h4>Chu kỳ thanh toán</h4></div>
                                </div>
                                <div class="mkdf-cpt-features-list-holder mkdf-cpt-table-content">
                                    <ul class="mkdf-cpt-features-list">


                                        <li class="mkdf-cpt-features-item"><span>Search By Time</span></li>
                                        <li class="mkdf-cpt-features-item"><span>API Access</span></li>
                                        <li class="mkdf-cpt-features-item"><span>Competition Metrics</span></li>
                                        <li class="mkdf-cpt-features-item"><span>Reports</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mkdf-comparision-table-holder mkdf-cpt-table">
                                <div class="mkdf-cpt-table-holder-inner">
                                    <div class="mkdf-cpt-table-border-top" style="background-color: #323232"></div>
                                    <div class="mkdf-cpt-table-head-holder">
                                        <div class="mkdf-cpt-table-head-holder-inner text-center">
                                            <h3 class="mkdf-cpt-table-title">10 Tháng T+1</h3>
                                            <p>Đối soát số liệu</p>
                                        </div>
                                    </div>
                                    <div class="mkdf-cpt-table-content">
                                        <ul class="text-center">

                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Search By Time: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">API Access: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Competition Metrics: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Reports: </b> <span class="ti-check icon"></span></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mkdf-comparision-table-holder mkdf-cpt-table">
                                <div class="mkdf-cpt-table-holder-inner">
                                    <div class="mkdf-cpt-table-border-top" style="background-color: #43cb83"></div>
                                    <div class="mkdf-cpt-table-head-holder">
                                        <div class="mkdf-cpt-table-head-holder-inner text-center">
                                            <h3 class="mkdf-cpt-table-title">15 Tháng T+1</h3>
                                             <p>Thanh toán hoa hồng</p>
                                        </div>
                                    </div>
                                    <div class="mkdf-cpt-table-content">
                                        <ul class="text-center">

                                           <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Search By Time: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">API Access: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Competition Metrics: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Reports: </b> <span class="ti-check icon"></span></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mkdf-comparision-table-holder mkdf-cpt-table">
                                <div class="mkdf-cpt-table-holder-inner">
                                    <div class="mkdf-cpt-table-border-top" style="background-color: #845a9f"></div>
                                    <div class="mkdf-cpt-table-head-holder">
                                        <div class="mkdf-cpt-table-head-holder-inner text-center">
                                            <h3 class="mkdf-cpt-table-title">200K+</h3>
                                             <p>Hoa hồng tối thiểu</p>
                                        </div>
                                    </div>
                                    <div class="mkdf-cpt-table-content">
                                        <ul class="text-center">

                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Search By Time: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">API Access: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Competition Metrics: </b> <span class="ti-check icon"></span></span></li>
                                            <li><span class="mkdf-cpt-table-item-feature"><b class="pricing-tables-hide">Reports: </b> <span class="ti-check icon"></span></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php  get_template_part('contents/blog/events'); ?>

    <section class="content-block academy-block white-text">
       <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="">
                        <h3 class="academy-title">ACCESSTRADE ACADEMY</h3>
                        <p class="academy-subtitle text-up">ĐÀO TẠO KHỞI NGHIỆP, KIẾM TIỀN HIỆU QUẢ VỚI <b>AFFILIATE</b></p>
                        <div class="academy-btn">
                            <a class="btn at-btn outline-white at-btn-lg" href="https://docs.google.com/forms/d/1PCpu7flLCfWVsMrsJh5yQzAZYDDRYERSK8GGLva1x9I/viewform" target="_blank">Tìm hiểu thêm</a>
                            <a class="btn at-btn at-btn-lg orange-btn" href="https://docs.google.com/forms/d/1PCpu7flLCfWVsMrsJh5yQzAZYDDRYERSK8GGLva1x9I/viewform" target="_blank">Đăng ký ngay</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </section>

    <!--<section class="content-block bk-green white-text">
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


    </section>-->

    <?php 	get_template_part('contents/publisher/footer'); ?>
