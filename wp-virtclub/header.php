<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <!-- dns prefetch -->
    <link href="//www.google-analytics.com" rel="dns-prefetch">

    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/comments.css">

    <!-- css + javascript -->
    <?php wp_head(); ?>
    <script>
    !function(){
        // configure legacy, retina, touch requirements @ conditionizr.com
        conditionizr()
    }()
    </script>
</head>
<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a rel="nofollow" href="http://browsehappy.com/">upgrade your browser</a> or <a rel="nofollow" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
<div id="wrapper">
<header class="clearfix">

	<!-- logo -->
    <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
        <a href="<?php echo home_url(); ?>">
        <?php  } ?>
        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">   
        <?php if ( is_front_page() && is_home() ){ 
        } else { ?>
        </a>
        <?php } ?>
    </div>
    <!-- /logo -->

    <span class="sdescription">CЕКС ПО СКАЙПУ ИЛИ ВИРТ ПО СКАЙПУ, ИЛИ ВИРТУАЛЬНЫЙ СЕКС ПО СКАЙПУ - ВСЁ ЗДЕСЬ!</span>
    <span class="stitle">Хочешь виртуального секса сейчас? Жми на кнопку:</span>

    <a class="all-girls" href="">Все модели</a>

    <nav class="headernav" role="navigation">
        <?php wpeHeadNav(); ?>
    </nav>

</header>
<div class="content clearfix">