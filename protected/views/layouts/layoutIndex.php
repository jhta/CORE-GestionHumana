<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="es"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>CORE | Gestión Humana</title>   

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!--favicon-->
<link rel='shortcut icon' type='image/x-icon' href='<?php echo Yii::app()->request->baseUrl; ?>/images/logo-ico.ico' />
<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Main Style -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/mainIndex.css" rel="stylesheet">

<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" rel="stylesheet">
<!-- Supersized -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/supersized.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/fonts.css" rel="stylesheet">

<!-- General CSS -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/supersized.css" rel="stylesheet">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>


</head>


<body>
    <!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<?php echo $content; ?>
<!-- Js -->
<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/waypoints.js"></script> <!-- WayPoints -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.sticky.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/validate.js"></script> <!-- Validate form -->

<!--<script src="<?php //echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>  Default JS -->
<!-- End Js -->


</body>
</html>
