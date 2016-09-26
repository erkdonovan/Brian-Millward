<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <!-- FAV ICON -->
  <link type="image/png" href="<?php echo get_site_url();?>/wp-content/themes/danstheme/img/favicon.png" rel="icon">

  <link href='https://fonts.googleapis.com/css?family=Lato|Oswald|Ubuntu' rel='stylesheet' type='text/css'>
  
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  
  <!-- GOOGLE ANALYTICS -->


<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">

</head>
<body>

 <!-- nav -->
 <div class="nav" role="navigation">
  <a href="#" class="mobile-nav-toggle">Menu</a> 
  <?php
        wp_nav_menu( array('container_class' => 'menu-footer',
        'theme_location' => 'primary') ); ?>
</div>

<!-- /nav -->
