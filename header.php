<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><!--font-awesomeのスタイルシートの呼び出し-->
  <link rel="stylesheet" href="css/responsive.css">
  <script src="js/jquery-2.1.4.min.js"></script>
  <?php wp_head(); ?><!--システム・プラグイン用-->
</head>

<body <?php body_class(); ?>><!--ページ毎にbody変更する用-->
  <!-- ヘッダー -->
  <header>
    <h1>Christa</h1>
    <h2>グルーデコ®️教室米子</h2>
    <div class="header-list container">
      <ul class="flex">
        <li><a class="main-menu" href="#">News</a></li>
        <li><a class="main-menu" href="#">About</a></li>
        <li><a class="main-menu" href="#">Gluedeco</a></li>
        <li><a class="main-menu" href="#">Lesson</a></li>
        <li><a class="main-menu" href="#">Contact</a></li>
      </ul>
    </div>
  </header>
  <!-- スマホトグルメニュー -->
  <div id="menu-container">
    <div id="menu-wrapper">
      <div id="hamburger-menu"><span></span><span></span><span></span></div>
      <!-- hamburger-menu -->
    </div>
    <!-- menu-wrapper -->
    <ul class="menu-list accordion">
      <li id="nav1" class="toggle accordion-toggle">
        <span class="icon-plus"></span>
        <a class="menu-link" href="#">News</a>
      </li>
      <!-- accordion-toggle -->
      <ul class="menu-submenu accordion-content">
        <li><a class="head" href="#">ブログ</a></li>
      </ul>
      <!-- menu-submenu accordon-content-->
      <li id="nav2" class="toggle accordion-toggle">
        <span class="icon-plus"></span>
        <a class="menu-link" href="#">About</a>
      </li>
      <!-- accordion-toggle -->
      <ul class="menu-submenu accordion-content">
        <li><a class="head" href="#">Christaについて</a></li>
      </ul>
      <!-- menu-submenu accordon-content-->
      <li id="nav3" class="toggle accordion-toggle">
        <span class="icon-plus"></span>
        <a class="menu-link" href="#">Gludeco</a>
      </li>
      <!-- accordion-toggle -->
      <ul class="menu-submenu accordion-content">
        <li><a class="head" href="#">グルーデコとは</a></li>
        <li><a class="head" href="#">スワロフスキーの輝き</a></li>
      </ul>
      <!-- menu-submenu accordon-content-->
      <li id="nav4" class="toggle accordion-toggle">
        <span class="icon-plus"></span>
        <a class="menu-link" href="#">Lesson</a>
      </li>
      <!-- accordion-toggle -->
      <ul class="menu-submenu accordion-content">
        <li><a class="head" href="#">体験レッスン</a></li>
        <li><a class="head" href="#">フリーレッスン</a></li>
        <li><a class="head" href="#">認定講師講座</a></li>
      </ul>
      <!-- menu-submenu accordon-content-->
      <li id="nav5" class="toggle accordion-toggle">
        <span class="icon-plus"></span>
        <a class="menu-link" href="#">Contact</a>
      </li>
      <!-- accordion-toggle -->
      <ul class="menu-submenu accordion-content">
        <li><a class="head" href="#">メールを送る</a></li>
        <li><a class="head" href="#">フォローする</a></li>
      </ul>
  </div>












