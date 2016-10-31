<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="SHORTCUT ICON" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cropped-favicon-1-32x32.ico" />

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-67979879-1', 'auto');
	  ga('send', 'pageview');
	</script>

    <span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
    <meta itemprop="ratingValue" content="10">
    <meta itemprop="bestRating" content="9">
    <meta itemprop="worstRating" content="0">
    <meta itemprop="ratingCount" content="200">
    </span>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/wow-master/css/libs/animate.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/simple-line-icons-master/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/animateSlider/css/jquery.animateSlider.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/at-style.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/custom.css">
	<?php wp_head(); ?>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '625592474247286');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=625592474247286&ev=PageView&noscript=1"
        /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
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
