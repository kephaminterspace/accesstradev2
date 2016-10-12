<?php /* Template Name: page register Template */ ?>
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
	if ( is_home() ) {
		// This is the blog posts index
	   get_template_part('contents/publisher/header');
	} else {
		// This is not the blog posts index
	   get_template_part('contents/blog/header');
	}
	?>
    <section class="body-sign">
    <div class="center-sign">
       <div class="clearfix logo-log">
            <h5>Đăng ký tài khoản <b>Publisher</b></h5>
        </div>
        <div class="panel panel-sign">
            <div class="panel-body">
            	<p><?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	///Insert partner account
    $host = @parse_url($_POST['siteUrl'], PHP_URL_HOST);
    if (!$host)
        $host = $url;

	$arr_post = array(
		'partnerAccountType' => 0,
		'loginName' => $_POST['loginName'],
		'loginPassword' =>$_POST['loginPassword'],
		'firstname' =>$_POST['firstName'],
		'lastname' =>$_POST['lastName'],
		'email' =>$_POST['email'],
		'phoneNumber' =>$_POST['phoneNumber'],
		'address' =>$_POST['address'],
		'siteUrl' =>$_POST['siteUrl'],
        'siteName' =>$host,
	);
	$save = curl_post('/p/accounts/register/v2', $arr_post);
	if(!json_decode($save)->error){
		$message_sucess = "Đăng ký tài khoản thành công vui lòng kiểm tra mail để xác nhận";
		$m = $message_sucess;
	}else{
		$arr_error = json_decode($save, true);
		$m = $arr_error['error'][0]['message'];
	}
}
echo $m;
?></p>
                <form action="<?php echo esc_url(home_url( '/' )) ;?>site/register" method="post" id="dataform">

                    <div class="form-group ">
                        <div class="">
                            <input  id="loginName" type="text" class="at-form-control" name="loginName" value="" placeholder="Tên đăng nhập chỉ bao gồm chữ và số" >
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="">
                            <input type="password" required  name="loginPassword" id="loginPassword" placeholder="Mật khẩu" class="at-form-control">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="">
                            <input type="password" required name="repassword" id="repassword" placeholder="Nhắc lại mật khẩu" class="at-form-control">
                        </div>

                    </div>
                    <div class="form-group">

                        <div class="">
                            <input  id="firstName"  data-msg-required="Vui lòng nhập tên" data-msg-firstName="Vui lòng nhập Tên" required type="text" class="at-form-control" name="firstName" value="" placeholder="Tên" >
                        </div>

                    </div>

                      <div class="form-group">

                        <div class="">
                            <input  id="lastName"  data-msg-required="Vui lòng nhập Họ" data-msg-lastName="Vui lòng nhập Họ" required type="text" class="at-form-control" name="lastName" value="" placeholder="Họ" >
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
                            <input  id="siteUrl" required type="text" class="at-form-control" name="siteUrl" value="" placeholder="Nhập link website, blog, G+, FB ... của bạn" >
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

                        <div class="col-sm-12" style="padding-top: 5px;">
                           <input type="submit" value="Đăng ký" class="at-btn btn-log" style="padding:5px 20px;">
                        </div>

                    </div>

                    <p class="text-center">Bạn đã có tài khoản? <a href="https://member.accesstrade.vn/p/partnerlogin">Đăng nhập</a>

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
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            var navpos = $('#mainnav').offset();
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
                loginName: {
                    required: true,
                    minlength: 5
                },
                loginPassword: {
                    required: true,
                    minlength: 6
                },
                repassword: {
                    required: true,
                    minlength: 6,
                    equalTo: "#loginPassword"
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
                loginName: {
					required: 'Vui lòng nhập tên đăng nhập'
                },
                loginPassword: {
					required: 'Vui lòng nhập mật khẩu của bạn'
                },
                repassword: {
					required: 'Hãy nhập lại mật khẩu của bạn'
                },
                email: {
					required: 'Vui lòng nhập địa chỉ email'
                },
                siteUrl: {
					required: 'Vui lòng nhập địa chỉ website, blog hoặc địa chỉ fb của bạn'
                }
            }
        });

    });
</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/custom.js"></script>




	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-67979879-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>

</html>
