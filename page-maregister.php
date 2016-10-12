<?php /* Template Name: page advertiser register Template */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cropped-favicon-1-32x32.png">
    <link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/wow-master/css/libs/animate.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/simple-line-icons-master/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/animateSlider/css/jquery.animateSlider.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/Font-Awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/checkbox/build.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/at-style.css">
</head>

<body class="login-form">
    <?php
	   get_template_part('contents/advertiser/header');
	?>
    
    <section class="body-sign">
    <div class="center-sign">
       <div class="clearfix logo-log">
         
            <h5>ĐĂNG KÝ DÀNH CHO NHÀ CUNG CẤP</h5>
        </div>
        <div class="panel panel-sign">
            <div class="panel-body">
            	<p><?php
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					///Insert partner account
					$arr_post = array(
						
						'FullName' => $_POST['FullName'],
						'CompanyName' =>$_POST['CompanyName'],
						'email' =>$_POST['email'],
						'phone' =>$_POST['phone'],
						'email' =>$_POST['email'],
						'address' =>$_POST['phoneNumber'],						
						'siteUrl' =>$_POST['siteUrl'],
					);
					$messenger  = "Xin chào!". "\r\n";
					$messenger  .= "Có một thông tin mới đăng ký gửi đến bạn:". "\r\n";
					$messenger  .= "Tên đầy đủ: ".$arr_post["FullName"]. "\r\n";
					$messenger  .= "Công ty: ".$arr_post["CompanyName"]. "\r\n";
					$messenger  .= "Phone: ".$arr_post["phone"]. "\r\n";
					$messenger  .= "Email: ".$arr_post["email"]. "\r\n";
					$messenger  .= "Address: ".$arr_post["address"]. "\r\n";
					$messenger  .= "siteUrl: ".$arr_post["siteUrl"]. "\r\n";
					$messenger  .= "Yêu hợp tác: ".$arr_post["request"]. "\r\n";
					$messenger  .= "--\r\n";
					$messenger  .= "Thông tin này được gửi tự động khi có một Advertiser đăng ký. ". "\r\n";
					$email  = wp_mail( $to="advertiser-sales@interspace.vn", $subject="Đăng ký Advertiser ".$arr_post["FullName"], $message = $messenger );
					if(!json_decode($email)->error){
						$message_sucess = "Cám ơn bạn đã Đăng ký tài khoản thành công chúng tôi sẽ liên hệ  với bạn ngay khi nhận được thông tin của bạn";
						$m = $message_sucess;
					}else{
						$arr_error = json_decode($email, true);
						$m = $arr_error['error'][0]['message'];
					}
				}
				echo $m;
				?>
</p>
                <form action="<?php echo esc_url(home_url( '/' )) ;?>site/maregister" method="post" id="dataform">
                   
                 

         
                    <div class="form-group">
                        
                        <div class="">
                            <input  id="FullName"  data-msg-required="Vui lòng nhập Họ và Tên" data-msg-firstName="Vui lòng nhập Họ và Tên" required type="text" class="at-form-control" name="FullName" value="" placeholder="Họ và Tên" >
                        </div>
           
                    </div>
                    
                      <div class="form-group">
                        
                        <div class="">
                            <input  id="CompanyName"  data-msg-required="Vui lòng nhập tên công ty" data-msg-lastName="Vui lòng nhập tên công ty" required type="text" class="at-form-control" name="CompanyName" value="" placeholder="Vui lòng nhập tên công ty" >
                        </div>
            
                    </div>
                    
                   <div class="form-group">
                        
                        <div class="">
                            <input  id="email"  data-msg-required="Vui lòng nhập địa chỉ email" data-msg-email="Vui lòng nhập địa chỉ email" required type="text" class="at-form-control" name="email" value="" placeholder="Địa chỉ email" >
                        </div>
                        
                    </div>
                    <div class="form-group">
                        
                        <div class="">
                            <input  id="phone" required type="text" class="at-form-control" name="phoneNumber" value="" placeholder="Số điện thoại" >
                        </div>
                        
                    </div>
                    <div class="form-group">
                        
                        <div class="">
                            <input  id="address" required type="text" class="at-form-control" name="address" value="" placeholder="Địa chỉ" >
                        </div>
                        
                    </div>
                    <div class="form-group">
                        
                        <div class="">
                            <input  id="siteUrl" required type="text" class="at-form-control" name="siteUrl" value="" placeholder="Nhập link website của bạn" >
                        </div>
                        
                    </div>
                     <div class="form-group">
                        
                        <div class="">
                            <input  id="request" required type="text" class="at-form-control" name="request" value="" placeholder="Yêu cầu hợp tác" >
                        </div>
                        
                    </div>
                    <div class="row button-g">
                       
                        <div class="col-sm-12 ">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    Tôi đồng ý với <a href="#">Điều khoản dịch vụ</a> và <a href="">Chính sách</a>
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                           <input type="submit" value="Đăng ký" class="at-btn btn-log">  
                        </div>
                        
                    </div>

                    <p class="text-center">Bạn đã có tài khoản Advertiser? <a href="https://member.accesstrade.vn/m/merchantlogin">Đăng nhập</a>

                    </p>
                </form>
            </div>
        </div>

        <p class="text-center text-muted mt-md mb-md">© 2016 ACCESSTRADE. All rights reserved.</p>
    </div>
</section>



    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/animateSlider/js/modernizr.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/wow-master/dist/wow.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/css3-animate-it.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/grid-view.js"></script>
    <script>
        $(document).ready(function () {
            var navpos = $('#mainnav').offset();
            console.log(navpos.top);
            $(window).bind('scroll', function () {
                if ($(window).scrollTop() > navpos.top) {
                    $('#mainnav').addClass('fixed');
                } else {
                    $('#mainnav').removeClass('fixed');
                }
            });
        });
        
    </script>
<script>
    $().ready(function () {
        // validate the comment form when it is submitted
        // validate signup form on keyup and submit
        $("#dataform").validate({
            rules: {
                FullName: {
                    required: true,
                    minlength: 5
                },
               CompanyName: {
                    required: true,
                    minlength: 5
                },            
                email: {
                    required: true,
                    email: true
                },                
                siteUrl: {
                    required: true,
                    url: true
                }
            },
            messages: {
                 FullName: {                  
					required: 'Vui lòng nhập tên đầy đủ'
                },
                CompanyName: {                   
					required: 'Vui lòng nhập tên công ty'
                },
               
                email: {                   
					required: 'Vui lòng nhập địa chỉ email'
                },             
                siteUrl: {                  
					required: 'Vui lòng nhập địa chỉ website của bạn'
                }
            }
        });

    });
</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/custom.js"></script>




</body>

</html>