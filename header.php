<!DOCTYPE html>
<html lang="en">

<head>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-67979879-1', 'auto');
	  ga('send', 'pageview');

	</script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cropped-favicon-1-32x32.png">
    <link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/wow-master/css/libs/animate.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/simple-line-icons-master/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/plugin/animateSlider/css/jquery.animateSlider.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/at-style.css">
	<?php wp_head(); ?>
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
