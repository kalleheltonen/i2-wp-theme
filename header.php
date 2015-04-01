<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package i2
 */
 
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
<script src="<?php bloginfo('template_directory'); ?>/js/Dropdown.js"></script>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <style>
            body {
                padding-top: 100px;
                padding-bottom: 0px;
            }
        </style>

<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<?php wp_head(); ?>



</head>

<?php $single_nav = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_id'         => '',
	'menu_class'      => 'menu',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
	'depth'           => 1,
	'walker'          => ''
);?>




<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
  
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">Yritys Oy</a>
        </div>
        <div class="navbar-collapse collapse">
			<ul id="horizontal-list" class="nav navbar-nav">
				<?php wp_nav_menu( $single_nav );?>
           </ul>
        </div><!--/.navbar-collapse -->
      </div><!--/.container -->
    </div><!--/.navbar -->
    
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
    </div>

        <?php wp_nav_menu( array('menu' => 'primary','theme_location' => 'primary','depth' => 2, 'container' => 'div','container_class' => 'collapse navbar-collapse','container_id' => 'bs-example-navbar-collapse-1','menu_class' => 'nav navbar-nav','fallback_cb'       => 'wp_bootstrap_navwalker::fallback', 'walker'  => new wp_bootstrap_navwalker()) ); ?>
    </div>
</nav>


    

