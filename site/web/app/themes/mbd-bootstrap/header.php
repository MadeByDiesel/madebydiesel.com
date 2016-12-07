<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Made By Diesel | Boise, Idaho | Shopify Experts | Wordpress Development | Web Design | Web Development">
    <meta name="author" content="Made By Diesel">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <!-- <title>Made By Diesel | Interactive Agency | Shopify Experts</title> -->
     <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?><?php wp_title(); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/assets/css/icomoon.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/assets/css/animate-custom.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/modernizr.custom.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">


    <div id="navbar-main">
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-cog" style="font-size:30px; color:#3498db;"></span>
                    </button>
                    <a class="navbar-brand hidden-xs hidden-sm" href="#home">
                        <span class="icon icon-cog" style="font-size:18px; color:#3498db;"></span>
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="http://madebydiesel.dev/#home" class="smoothScroll">Home</a>
                        </li>
                        <li> <a href="http://madebydiesel.dev/#about" class="smoothScroll"> About</a>
                        </li>
                        <li> <a href="http://madebydiesel.dev/#services" class="smoothScroll"> Services</a>
                        </li>
                        <li> <a href="http://madebydiesel.dev/#team" class="smoothScroll"> Team</a>
                        </li>
                        <li> <a href="http://madebydiesel.dev/#portfolio" class="smoothScroll"> Portfolio</a>
                        </li>
                        <li> <a href="http://madebydiesel.dev/#contact" class="smoothScroll"> Contact</a>
                        </li>
                        <?php wp_list_pages(array('title_li' => '', 'exclude' => '9')); ?>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
