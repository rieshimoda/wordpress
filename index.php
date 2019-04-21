<?php get_header(); ?>

  <!-- トップ画像フェードイン -->
  <div class="container">
    <div class="top-wrapper flex">
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
    <img class="flex" src="./image/mid-wrapper.jpg">
    <p id="fadein">Christaでは、手作りアクセサリー
      というより、クオリティの高いアクセサリーを
      いただけるよう心がけております。
      初めての方、興味をお持ちの方、
      新しいことにチャレンジしてみたい方、
      大歓迎です。グルーデコ®の世界に一歩踏み出してみませんか？
      物を作る楽しみやワクワクした気持ちを共感できたら嬉しいです。<br><br>
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
        <img src="./image/image1.jpg">
      </a>
      <a href="#">
        <img src="./image/image1.jpg">
      </a>
      <a href="#">
        <img src="./image/image1.jpg">
      </a>
    </div>
    <div class="instagram-image2">
      <a href="#">
        <img src="./image/image1.jpg">
      </a>
      <a href="#">
        <img src="./image/image1.jpg">
      </a>
      <a href="#">
        <img src="./image/image1.jpg">
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
        <input class="text-margin left" type="text" name="name" id="" placeholder="お名前">
        <input class="text-margin right" type="email" name="email" id="" placeholder="メール">
      </div>
      <input class="text-margin" type="text" name="subject" id="" placeholder="タイトル">
      <textarea class="text-margin placehold-text" name="message" id="message" placeholder="メッセージ" rows="８"></textarea>
      <input class="submit text-margin" type="submit" value="送信">
    </div>
  </div>

<?php get_footer(); ?>
