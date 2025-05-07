<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.css">
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js" type="text/javascript"></script>

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

<body <?php body_class(); ?>>

<!-- HEADER -->
<header class="bg_01">
  <div class="wrapper">
    <div class="header_nav_sp">
      <div class="hamburger" id="js_nav_icon">
        <span class=""></span>
      </div>
    </div>
    <h1 class="h_logo">
      <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/h_logo.png" alt="株式会社アウトワード"></a>
    </h1>
    <nav id="global_nav" class="gnav">
      <ul class="gnav_list">
        <li class="gnav_item">
          <p><a href="<?php bloginfo( 'url' ); ?>/works">制作実績</a></p>
          <ul class="gnav_sub_list">
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/works_cat/system">WEBシステム開発</a></li>
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/works_cat/digitalcontents">デジタルコンテンツ</a></li>
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/works_cat/website">WEBサイト制作</a></li>
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/works_cat/webmedia">WEBメディア制作</a></li>
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/works_cat/app">ネイティブアプリ開発</a></li>
          </ul>
        </li>
        <li class="gnav_item">
          <p><a href="<?php bloginfo( 'url' ); ?>/service">事業内容</a></p>
          <ul class="gnav_sub_list">
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/service/system">WEBシステム開発</a></li>
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/service/digitalcontents">デジタルコンテンツ</a></li>
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/service/website">WEBサイト制作</a></li>
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/service/webmedia">WEBメディア制作</a></li>
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/service/app">ネイティブアプリ開発</a></li>
          </ul>
        </li>
        <li class="gnav_item">
          <p><a href="<?php bloginfo( 'url' ); ?>/company">会社情報</a></p>
        </li>
        <li class="gnav_item">
          <p><a href="<?php bloginfo( 'url' ); ?>/recruit">求人・採用情報</a></p>
          <ul class="gnav_sub_list">
            <li class="gnav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/entry">求人フォーム</a></li>
          </ul>
        </li>
        <li class="gnav_item">
          <p><a href="<?php bloginfo( 'url' ); ?>/news">お知らせ</a></p>
        </li>
      </ul>
    </nav>
    <div class="sp_header_nav_wrap">
      <div class="sp_header_nav">
        <ul class="accordion">
          <li class="accordion_contents">
            <p class="ac ac_multi"><a href="<?php bloginfo( 'url' ); ?>/works">制作実績</a></p>
            <ul class="inner">
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/works_cat/system">WEBシステム開発</a></li>
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/works_cat/digitalcontents">デジタルコンテンツ</a></li>
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/works_cat/website">WEBサイト制作</a></li>
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/works_cat/webmedia">WEBメディア制作</a></li>
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/works_cat/app">ネイティブアプリ開発</a></li>
            </ul>
          </li>
          <li class="accordion_contents">
            <p class="ac ac_multi"><a href="<?php bloginfo( 'url' ); ?>/service">事業内容</a></p>
            <ul class="inner">
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/service/system">WEBシステム開発</a></li>
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/service/digitalcontents">デジタルコンテンツ</a></li>
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/service/website">WEBサイト制作</a></li>
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/service/webmedia">WEBメディア制作</a></li>
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/service/app">ネイティブアプリ開発</a></li>
            </ul>
          </li>
          <li class="accordion_contents">
            <p class="ac"><a href="<?php bloginfo( 'url' ); ?>/company">会社情報</a></p>
          </li>
          <li class="accordion_contents">
            <p class="ac ac_multi"><a href="<?php bloginfo( 'url' ); ?>/recruit">求人・採用情報</a></p>
            <ul class="inner">
              <li class="ac_content"><a href="<?php bloginfo( 'url' ); ?>/entry">求人フォーム</a></li>
            </ul>
          </li>
          <li class="accordion_contents">
            <p class="ac"><a href="<?php bloginfo( 'url' ); ?>/news">お知らせ</a></p>
          </li>
          <li class="accordion_contents">
            <p class="ac"><a href="<?php bloginfo( 'url' ); ?>/contact">お問い合わせ</a></p>
          </li>
        </ul>
      </div>
    </div>
    <!-- //SP_NAV -->

    <div class="h_add">
      <a href="<?php bloginfo( 'url' ); ?>/contact">
        <img class="pc_inline" src="<?php bloginfo( 'template_url' ); ?>/img/h_mail.png" alt="お問い合わせ">
      </a>
      <a href="tel:092-885-1364">
        <img class="sp_inline" src="<?php bloginfo( 'template_url' ); ?>/img/h_tell.png" alt="電話">
      </a>
    </div>
  </div>
</header>
