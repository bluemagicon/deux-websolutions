<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- TEST -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="apple-mobile-web-app-title" content="<?= bloginfo('name') ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- SLICK SLIDER -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<?php /*
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-regular.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-600.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-700.woff2" as="font" crossorigin="anonymous" />
	*/ ?>

	<?php wp_head(); ?>

</head>


<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_header 		= get_field('opt_header', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_header	= get_field('override_header') ? get_field('instance_header')['opt_header'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_header	= $override_header ?: $global_header;

// ----------------------------------------------------------------------
?>


<body <?php body_class('w-body'); ?>>

    <header id="header">
        <div class="alignwide">
            <div class="logo-wrapper">
                <?php include_once 'tpl/partials/logo-function.php'; ?>
                <?php include 'tpl/partials/logo.php'; ?>
            </div>
            <div class="contact">
                <a href="mailto:info@deux.de">info@deux.de</a>
                <a href="tel:+4944193658002">0441 936 580 02</a>
            </div>
            <a href="tel:+4944193658002" class="phone-icon">
                <svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M5,6A8.22,8.22,0,0,0,8,9.05l.69-1a.78.78,0,0,1,1-.23,8.91,8.91,0,0,0,3.56,1.06.77.77,0,0,1,.72.77v3.47a.78.78,0,0,1-.7.78A12.07,12.07,0,0,1,.06,3.17,12.74,12.74,0,0,1,.06.7.78.78,0,0,1,.84,0H4.31a.77.77,0,0,1,.77.72A8.91,8.91,0,0,0,6.14,4.28a.78.78,0,0,1-.23,1ZM3,5.46l1.48-1a10.65,10.65,0,0,1-.86-2.85h-2v.38a10.5,10.5,0,0,0,10.5,10.5h.38v-2a10.65,10.65,0,0,1-2.85-.86L8.54,11a10.78,10.78,0,0,1-1.24-.58l0,0A9.74,9.74,0,0,1,3.6,6.74l0,0A9.33,9.33,0,0,1,3,5.46Z"/></svg>
            </a>
            <!--
            <div class="mainnav-wrapper">
                <?php echo wp_nav_menu(array('menu' => 'Hauptmenü')); ?>
            </div>
            -->
        </div>
    </header>
