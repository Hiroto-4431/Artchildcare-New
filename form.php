<?php
$job_name = $_POST['job_name'];
?>
<?php include('./inc/header.php'); ?>

<!-- ===== メイン ===== -->
<main id="index">
  <!-- === エリア選択 === -->
  <section id="form" class="top form">
    <!--トピックパス-->
    <div class="topic-path">
      <ul>
        <li class="before-position__path">
          <p class="topic-path__num before-position__num">1</p>
          <p class="topic-path__text before-position__text">条件検索</p>
        </li>
        <li class="before-position__path">
          <p class="topic-path__num before-position__num">2</p>
          <p class="topic-path__text before-position__text">求人表示</p>
        </li>
        <li class="before-position__path">
          <p class="topic-path__num before-position__num">3</p>
          <p class="topic-path__text before-position__text">求人詳細</p>
        </li>
        <li>
          <p class="topic-path__num current-position__num">4</p>
          <p class="topic-path__text current-position__text">情報入力</p>
        </li>
        <li>
          <p class="topic-path__num">5</p>
          <p class="topic-path__text">完了</p>
        </li>
      </ul>
    </div>

    <!--メインコンテンツ-->
    <div class="form__content">
      <!--ヘッドライン-->
      <div class="section-title form__content--headline">
        <h1 class="common-title">
          <i class="fa-solid fa-pen-to-square"></i>
          情報入力
        </h1>
        <p class="common-text">
          フォームに必要事項を記入いただきエントリーボタンを押してください。
        </p>
      </div>

      <!--コンテンツ-->
      <div class="form__content--form-wrapper">
        <form action="complete.php" method="post">
          <!--テーブル-->
          <table class="">
            <!--応募案件-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="name">応募案件</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <p class="form__content--cell--job-name"><?php echo $job_name ?></p>
              </td>
            </tr>

            <!--お名前-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="name">お名前</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="name" placeholder="山田花子" class="">
              </td>
            </tr>

            <!--フリガナ-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="name_read">フリガナ</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="name_read" placeholder="ヤマダハナコ" class="">
              </td>
            </tr>

            <!--電話番号-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="tel">ご連絡先電話番号</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="tel" placeholder="012-3456-7890" class="">
              </td>
            </tr>

            <!--メールアドレス-->
            <tr class="form__content--cell form__content--mail">
              <th class="form__content--cell--title">
                <label for="mail">メールアドレス<br><span class="form__content--cell--postscript">　</span></label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="mail" placeholder="art-child@example.com" class="">
                <p class="form__content--cell--postscript">※メールの受信制限をしている方は解除をお願いします。</p>
              </td>
            </tr>

            <!--保有資格-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="license">保有資格<br><span class="form__content--cell--postscript">（見込みを含む）</span></label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="license" placeholder="保育士" class="">
                <p class="form__content--cell--postscript">※資格をお持ちでない方は「なし」とご記入ください。</p>
              </td>
            </tr>

            <!--年齢-->
            <tr class="form__content--cell form__contact--age">
              <th class="form__content--cell--title">
                <label for="license">年齢</label>
                <span class="form__content--cell--required">必須</span>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="license" placeholder="20" class=""><span>歳</span>
              </td>
            </tr>

            <!--職務経験-->
            <tr class="form__content--cell">
              <th class="form__content--cell--title">
                <label for="license">職務経験</label>
              </th>
              <td class="form__content--cell--text">
                <input type="text" name="license" placeholder="認可保育園での保育士経験3年" class="">
              </td>
            </tr>

            <!--ご質問-->
            <tr class="form__content--cell form__content--question">
              <th class="form__content--cell--title">
                <label for="question">ご質問</label>
              </th>
              <td class="form__content--cell--text">
                <textarea name="question" placeholder=""></textarea>
                <p class="form__content--cell--postscript">※面接希望日時が決まっていればご記入ください。</p>
              </td>
            </tr>
          </table>

          <!--エントリーボタン-->
          <div class="form__content--submit">
            <button type="submit">
              <span>エントリー</span>
              <i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>
        </form>
      </div>


      <div class="content-back">
        <a href="detail.php">
          <i class="fa-solid fa-chevron-left"></i>
          求人詳細へ戻る
        </a>
      </div>
    </div>
  </section>
</main>

<?php include('./inc/footer.php'); ?>