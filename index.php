<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script src="js/jquery-2.1.4.min.js"></script>
</head>

<body>
  <!-- ヘッダー -->
  <header>
    <h1>Christa</h1>
    <h2>グルーデコ教室米子</h2>
    <div class="header-list container">
      <a class="main-menu" href="#">News</a>
      <a class="main-menu" href="#">About</a>
      <a class="main-menu" href="#">Gluedeco</a>
      <a class="main-menu" href="#">Lesson</a>
      <a class="main-menu" href="#">Contact</a>
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

  <!-- トップ画像フェードイン -->
  <div class="container">
    <div class="top-wrapper">
      <div class="left">
        <img src="./image/image4_edited-1.jpg">
      </div>
      <div class="right" id="slide">
        <ul>
          <li><img src="./image/image4.jpg" alt="img1"></li>
          <li><img src="./image/image4_edited-1.jpg" alt="img2"></li>
        </ul>
      </div>
    </div>
    <div class="mid-wrapper flex">
      <div class="contents-item">
        <a href="#">
          <p>体験レッスン<br>フリーレッスン<br> </p>
          <img class="image" src="./image/mid.jpg">
        </a>
      </div>
      <div class="contents-item">
        <a href="#">
          <p>ブログ<br> <br> </p>
          <img class="image" src="./image/mid.jpg">
        </a>
      </div>
      <div class="contents-item">
        <a href="#">
          <p>グルーデコ®️<br>認定講師講座</p>
          <img class="image" src="./image/mid.jpg">
        </a>
      </div>
    </div>
  </div>

  <div class="bottom-wrapper container">
    <img src="./image/mid-wrapper.jpg">
    <p id="fadein">Christaでは、手作りアクセサリー
      というより、クオリティの高いアクセサリーを
      いただけるよう心がけております。
      初めての方、興味をお持ちの方、
      新しいことにチャレンジしてみたい方、
      大歓迎です。グルーデコ®の世界に一歩踏み出してみませんか？
      物を作る楽しみやワクワクした気持ちを共感できたら嬉しいです。<br>
      <a href="#">Read more...</a>
    </p>
  </div>
  </div>
  <div class="instagram container">
    <div class="heading">
      <h2>Instagram</h2>
      <h3>Christaの素敵な画像を紹介します</h3>
    </div>
    <div class="instagram-image">
      <a href="#">
        <img class="image" src="./image/image1.jpg">
      </a>
      <a href="#">
        <img class="image" src="./image/image1.jpg">
      </a>
      <a href="#">
        <img class="image" src="./image/image1.jpg">
      </a>
    </div>
    <div class="instagram-image2">
      <a href="#">
        <img class="image" src="./image/image1.jpg">
      </a>
      <a href="#">
        <img class="image" src="./image/image1.jpg">
      </a>
      <a href="#">
        <img class="image" src="./image/image1.jpg">
        <p></p>
      </a>
    </div>

    <div class="message-wrapper">
      <div class="heading">
        <h2>Contact Form</h2>
        <h3>レッスンの予約、各種お問い合わせ、オーダーについてなど<br>
          お気軽にご連絡下さい。３日以内の返信を心掛けております。
        </h3>
      </div>
      <h3 class="title">※お問い合わせ内容は、以下のフォームからお送り下さい。</h3>
      <div class="form">
        <input class="text-margin text1" type="text" name="name" id="" placeholder="お名前">
        <input class="text-margin text2" type="email" name="email" id="" placeholder="メール">
      </div>
      <input class="text-margin" type="text" name="subject" id="" placeholder="タイトル">
      <textarea class="text-margin placehold-text" name="message" id="message" placeholder="メッセージ" rows="８"></textarea>
      <input class="submit text-margin" type="submit" value="送信">
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="footer-logo" id="footer-id">
        <h1>Christa</h1>
        <h2>グルーデコ®️教室・米子</h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>News</th>
            <th>About</th>
            <th>Gludeco</th>
            <th>Lesson</th>
            <th>Contact</th>
          </tr>
        </thead>
        <tr class="footer-list">
          <td><a href="#">ブログ</a></td>
          <td><a href="#">Christaについて</a></td>
          <td><a href="#">グルーデコとは</a></td>
          <td><a href="#">体験レッスン</a></td>
          <td><a href="#">メールを送る</a></td>
        </tr>
        <tr class="footer-list">
          <td></td>
          <td></td>
          <td><a href="#">スワロフスキーの輝き</a></td>
          <td><a href="#">フリーレッスン</a></td>
          <td><a href="#">フォローする</a></td>
        </tr>
        <tr class="footer-list">
          <td></td>
          <td></td>
          <td></td>
          <td><a href="#">認定講師講座</a></td>
        </tr>

        </tfoot>
      </table>

    </div>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>