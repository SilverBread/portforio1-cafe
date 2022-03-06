<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>お問い合わせ | White BookCafe</title>
    <link href="css/call.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="normal">
        <nav>
          <ul class="global-nav">
            <li><a href="../index.html">トップ</a></li>
            <li><a href="../index.html#about">White BookCafeについて</a></li>
            <li><a href="../index.html#news">お知らせ</a></li>
            <li><a href="menu.html">メニュー</a></li>             
            <li><a href="member1.html">会員登録</a></li>
            <li><a href="../index.html#access1">アクセス</a></li>
          </ul>
        </nav>
      </div>
      <div class="drawer">
        <input type="checkbox" name="navToggle" id="navToggle" class="nav-toggle">
          <label for="navToggle" class="btn-burger">
            <span class="icon"></span>
          </label>
        <nav class="nav">
          <ul class="nav-list">
            <li><a href="../index.html">トップ</a></li>
            <li><a href="../index.html#about">White BookCafeについて</a></li>
            <li><a href="../index.html#news">お知らせ</a></li>
            <li><a href="menu.html">メニュー</a></li>
            <li><a href="member1.html">会員登録</a></li>
            <li><a href="../index.html#access2">アクセス</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <h1>
        <ruby>
          CONTACT
          <rt>お問い合わせ</rt>
        </ruby>
      </h1>
      <form action="call_confirm.php" method="post">

        <div class="Form">
          <div class="Form-Item">
            <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">必須</span>お問い合わせ項目</p>
                <select name="category" required>
                  <option value="" disabled selected style="display:none;">選択してください</option>
                  <option>書籍・絵本</option>
                  <option>イベント・展示会</option>
                  <option>取材・メディア掲載</option>
                  <option>カフェ</option>
                  <option>その他</option>
                </select>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label">
            <span class="Form-Item-Label-Required">必須</span>お名前</p>
            <input type="text" class="Form-Item-Input" name="name" placeholder="例）山田 太郎" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label">
            <span class="Form-Item-Label-Required">必須</span>フリガナ</p>
            <input type="text" class="Form-Item-Input" name="furigana" placeholder="例）フリガナ" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label">
            <span class="Form-Item-Label-Required">必須</span>電話番号</p>
            <input type="text" class="Form-Item-Input" name="tel" placeholder="例）000-0000-0000" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label">
            <span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
            <input type="email" class="Form-Item-Input" name="mail" placeholder="例）example@gmail.com" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label isMsg">
            <span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
            <textarea class="Form-Item-Textarea" name="contents" placeholder="例）「◯◯」という本の在庫はありますか？" required></textarea>
          </div>
          <input type="submit" class="Form-Btn" value="確認画面へ">
        </div>
      </form>
    </main>

    <!-- フッター -->
    <footer>
      <div class="footer-menu">
        <div class="left">
          <div class="inner">
            <a href="../index.html"><img class="top" src="image/icon.png"></a>
            <div class="Company">
              <p class="Company-name">White Book Cafe（ホワイト ブック カフェ）</p>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="menu">
            <ul class="menu-left">
              <li><a href="../index.html#about">White BookCafeについて</a></li>
              <li><a href="../index.html#news">お知らせ</a></li>
              <li><a href="menu.html">メニュー</a></li>
            </ul>
            <ul class="menu-right">
              <li><a href="member1.html">会員登録</a></li>
              <li><a href="../index.html#access1">アクセス</a></li>
              <li><a href="call.html">お問い合わせ</a></li>
            </ul>
          </div>
        </div>
      </div>
        <small>©2021 White Book Cafe All rights reserved.</small>
    </footer>

  </body>
</html>
