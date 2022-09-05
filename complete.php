<?php include('./inc/header.php'); ?>

<!-- ===== メイン ===== -->
<main id="index">
  <!-- === エリア選択 === -->
  <section id="complete" class="top complete">
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
        <li class="before-position__path">
          <p class="topic-path__num before-position__num">4</p>
          <p class="topic-path__text before-position__text">情報入力</p>
        </li>
        <li>
          <p class="topic-path__num current-position__num">5</p>
          <p class="topic-path__text current-position__text">完了</p>
        </li>
      </ul>
    </div>

    <!--メインコンテンツ-->
    <div class="complete__content">
      <!--ヘッドライン-->
      <div class="section-title complete__content--headline">
        <h1 class="common-title">
          <i class="fa-solid fa-circle-check"></i>
          完了
        </h1>
        <p class="common-text">
          説明会へのエントリーが完了しました。<br>
          下記のスライドにて、当社の魅力を事前に確認していただけます。
        </p>
      </div>

      <!--コンテンツ-->
      <div class="complete__content--document">
        <div class="complete__content--document--content">
          <script id="gfj_create_iframe_script_163" src="//good-for-job.com/js/user/slide_player/create_iframe.js" data-src="//good-for-job.com/slide-player/163" data-ratio="1.7777777777778" data-company_url="https://good-for-job.com/company/180" data-title="アートチャイルドケア株式会社 採用ピッチ資料"></script>
        </div>
      </div>

      <!--前へもどる-->
      <div class="content-back">
        <a href="condition.php">
          <i class="fa-solid fa-chevron-left"></i>
          条件検索へ戻る
        </a>
      </div>
    </div>
  </section>
</main>

<?php include('./inc/footer.php'); ?>