<?php
global $GMOPlugin;
$optionTheme  = $GMOPlugin->themeSetting->getSettings(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bella Shop</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/ico/favicon.ico">

	<?php wp_head() ?>
    <!-- Head Libs -->
    

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide">
<!-- PRELOADER -->
<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">
    <!-- HEADER -->
    <header class="header">
        <div class="header-wrapper">
            <div class="container">

                <!-- Logo -->
                <div class="logo">
                <a href="index.html"><img src="<?php echo !empty($optionTheme['gmo_header_logo']) ? $optionTheme['gmo_header_logo'] : '' ?>" alt="Bella Shop"/></a>
                </div>
                <!-- /Logo -->
            </div>
        </div>
        <div class="navigation-wrapper">
            <div class="container">
                <!-- Navigation -->
                <nav class="navigation closed clearfix">
                <?php
            wp_nav_menu(array(
                'theme_location' => 'gmo-primary-menu',
                'walker'         => new CustomPrimaryMenuWalker(),
                'fallback_cb'    => false,
                'container'      => '',
                'menu_class'           => 'nav sf-menu',
                'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
            ));
        ?>
                </nav>

                
                <!-- /Navigation -->
            </div>
        </div>
    </header>
    <!-- /HEADER -->