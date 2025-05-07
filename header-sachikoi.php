<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/sachikoi.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.css">
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/sachikoi/gnav.js" type="text/javascript"></script>

<?php if ( is_front_page( ) ) : ?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/top.js"></script>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/lib/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/js/lib/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/js/lib/slick/slick-theme.css"/>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/simple_ticker/jquery.simpleTicker.js"/></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/js/simple_ticker/jquery.simpleTicker.css"/>

<?php elseif ( is_page('entry') ) : ?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/yubinbango/yubinbango.js"/></script>

<?php endif ; ?>

<?php if( is_front_page() || is_page('company') ): ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYrmb_J1jaY386lC9n_e8snoAPnZlSiwU"></script>
<?php endif; ?>

<?php wp_head(); ?>

</head>

<body class="body_sachikoi">
<div class="page_sachikoi">


<div class="sachikoi_header">
<?php get_template_part('gnav_sachikoi'); ?>
</div><!-- /.sachikoi_header -->