<?php include('./inc/header.php'); ?>

<!-- ===== メイン ===== -->
<main id="index">
  <!-- === エリア選択 === -->
  <section id="detail" class="top detail">
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
        <li class="">
          <p class="topic-path__num current-position__num">3</p>
          <p class="topic-path__text current-position__text">求人詳細</p>
        </li>
        <li>
          <p class="topic-path__num">4</p>
          <p class="topic-path__text">情報入力</p>
        </li>
        <li>
          <p class="topic-path__num">5</p>
          <p class="topic-path__text">完了</p>
        </li>
      </ul>
    </div>

    <!--メインコンテンツ-->
    <div class="detail__content">

      <!--ヘッドライン-->
      <div class="section-title detail__content--headline">
        <h1 class="common-title detail__content--title--under">
          <img class="section-title__logo" src="./assets/img/detail.png">
          求人詳細
        </h1>
      </div>

      <form action="form.php" method="post">
        <input type="hidden" value="" name="job_name" id="job_name_send">


        <!--コンテンツ-->
        <!--詳細情報-->
        <div class="detail__content--job">

          <div class="tab__content">
            <span class="tab__content--cell">
              <span class="tab__content--cell--text tab__content--urgent_recruit">
                急募
              </span>
            </span>
            <span class="tab__content--cell">
              <span class="tab__content--cell--text tab__content--facility">
                認可
              </span>
            </span>
            <span class="tab__content--cell">
              <span class="tab__content--cell--text tab__content--employment">
                パート
              </span>
            </span>
          </div>
          <p class="detail__content--job--title" name="name">
            アートチャイルドケア鶴見【保育職員】
          </p>
          <input type="hidden" value="" name="name" id="job_name_send">
          <div class="detail__content--job--img">
            <img class="modal__trigger" src="./assets/img/detail_job-img1.png" data-slide-index="1">
            <img class="modal__trigger" src="./assets/img/detail_job-img2.png" data-slide-index="2">
            <img class="modal__trigger" src="./assets/img/detail_job-img3.png" data-slide-index="3">
          </div>
          <div class="detail__content--job--content">
            <p class="detail__content--job--text">横浜市鶴見区にある保育園です。園周辺には大きな公園や緑がたくさんあり、体を動かして元気に遊ぶことのできる環境が整っています。また目の前の鶴見川沿いの遊歩道をゆったり歩きながら、桜や紫陽花を見て季節を感じながらお散歩にも行っています。地域の行事にも積極的に参加し、たくさんのお友だちを作りたいと思っています。</p>
            <div class="detail__content--job--wrap-btn">
              <input type="submit" value="WEBで応募" class="detail__content--job--inside-btn">
            </div>
          </div>
        </div>

        <!--モーダル-->
        <div class="modal" id="modal">
          <!--オーバーレイ-->
          <div class="modal__overlay"></div>
          <!--閉じるボタン-->
          <div class="modal__close">
            <p class="close__mark">×</p>
          </div>
          <div class="modal__content">
            <div class="swiper modal__slider">
              <!--ウィンドウ-->
              <div class="modal__window swiper-wrapper">
                <img class="swiper-slide modal__slide" src="./assets/img/detail_job-img1.png">
                <img class="swiper-slide modal__slide" src="./assets/img/detail_job-img2.png">
                <img class="swiper-slide modal__slide" src="./assets/img/detail_job-img3.png">
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>

        <!--メインコンテンツ-->
        <div class="detail__content--information">
          <div class="detail__content--recruit">
            <div class="detail__content--range">
              <!--募集要項-->
              <div class="detail__content--list">
                <p class="detail__content--title">募集要項</p>
                <table class="detail__content--table">
                  <!--職種-->
                  <tr>
                    <th>
                      <p>職種</p>
                    </th>
                    <td>
                      認可保育園の保育士
                    </td>
                  </tr>
                  <!--資格-->
                  <tr>
                    <th>
                      <p>資格</p>
                    </th>
                    <td>
                      保育士
                    </td>
                  </tr>
                  <!--雇用形態-->
                  <tr class="employment">
                    <th>
                      <p>雇用形態</p>
                    </th>
                    <td>
                      パート
                    </td>
                  </tr>
                  <!--業務内容-->
                  <tr>
                    <th>
                      <p>業務内容</p>
                    </th>
                    <td>
                      ・定員53名の認可保育園で1~5歳児のお子さまの保育<br>
                      ・昼食 / おやつ準備<br>
                      ・掃除<br>
                      ・連絡帳等の書類記入<br>
                      ・お子さま送迎時の保護者対応
                    </td>
                  </tr>
                  <!--給与-->
                  <tr>
                    <th>
                      <p>給与</p>
                    </th>
                    <td>
                      時給：1,200円<br>
                      【賞与】おつかれさま賞（業績による）
                    </td>
                  </tr>
                  <!--勤務園名-->
                  <tr class="location">
                    <th>
                      <p>勤務園名</p>
                    </th>
                    <td>アートチャイルドケア鶴見</td>
                  </tr>
                  <!--所在地-->
                  <tr class="place">
                    <th>
                      <p>所在地</p>
                    </th>
                    <td>
                      <span>神奈川県横浜市鶴見区鶴見中央3-10　あしほ総合クリニック2階</span>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.7614687182527!2d139.68500041512604!3d35.510175946941885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185e0122cfc21b%3A0xde55702d7e478788!2z44Ki44O844OI44OB44Oj44Kk44Or44OJ44Kx44Ki6ba06KaL!5e0!3m2!1sja!2sjp!4v1655891125282!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </td>
                  </tr>
                  <!--アクセス-->
                  <tr>
                    <th>
                      <p>アクセス</p>
                    </th>
                    <td>
                      JR京浜東北線「鶴見駅」 / 京浜急行線「京急鶴見駅」徒歩15分
                    </td>
                  </tr>
                  <!--勤務時間-->
                  <tr class="work__time">
                    <th>
                      <p>勤務時間</p>
                    </th>
                    <td>
                      開園時間　７：３０～２０：３０
                      ①８：００～１７：００
                      ②９：００～１８：００
                      ※①②いずれか内で１日６時間～、週３日～勤務可能な方</td>
                  </tr>
                  <!--休日-->
                  <tr class="holiday">
                    <th>
                      <p>休日</p>
                    </th>
                    <td>
                      休園日：日曜・祝日・年末年始<br>
                      その他応相談
                    </td>
                  </tr>
                  <!--福利厚生-->
                  <tr class="welfare">
                    <th>
                      <p>福利厚生</p>
                    </th>
                    <td>
                      通勤手当全額支給<br>
                      社会保険完備<br>
                      育児支援（産前・産後休業、育児休業、子の看護休暇）<br>
                      ナーサリーサポート制度<br>
                      介護支援（介護休業、短期介護休暇）<br>
                      永年勤続表彰<br>
                      ユニバーサルスタジオジャパン優待制度<br>
                      ベネフィットステーション会員（大型テーマパーク優待制度）<br>
                      小児救急資格取得支援制度<br>
                      ※社内規定あり
                    </td>
                  </tr>
                  <!--特徴-->
                  <tr class="feature">
                    <th>
                      <p>特徴</p>
                    </th>
                    <td>
                      未経験・ブランクOK、30代 40代 50代歓迎、初心者歓迎、主婦歓迎、経験者優遇、若手が活躍、男性保育士、福利厚生充実、社会保険完備、産休育休制度、残業少なめ、時短勤務、通勤便利、昇給昇進あり、有給、扶養内可、研修充実、上京者歓迎、勤務地選択可、20代活躍中、30代活躍中、40代活躍中、中高年、第二新卒、ブランク可
                    </td>
                  </tr>
                </table>
              </div>

              <!--SP 園長から応募者へ-->
              <div class="detail__content--message">
                <p class="detail__content--message--title">園長から応募者へ</p>
                <!--自動書き換え-->
                <div class="detail__content--message--content">
                  <!--メッセージ内容が入ります-->
                </div>
                <!--自動書き換え-->
                <div class="detail__content--message--from">
                  <!--メッセージ元が表示されます-->
                </div>
              </div>

              <!--採用フロー-->
              <div class="detail__content--flow">
                <p class="detail__content--title">採用フロー</p>
                <ul class="detail__content--flow--all">

                  <li class="detail__content--flow--detail">
                    <p class="flow__main">
                      面接調整
                    </p>
                  </li>

                  <li class="detail__content--flow--detail">
                    <p class="flow__main">
                      履歴書
                      <span>
                        (写真貼付)
                      </span>
                      <br>
                      資格証を準備
                    </p>
                  </li>

                  <li class="detail__content--flow--detail">
                    <p class="flow__main">
                      面接・筆記試験
                      <br>
                      <span>
                        一般常識・
                        <br class="display-lg">
                        簡単な作文含め30分
                      </span>
                    </p>
                  </li>

                  <li class="detail__content--flow--detail">
                    <p class="flow__main">
                      内定
                    </p>
                  </li>

                  <li class="detail__content--flow--detail">
                    <p class="flow__main">
                      入社
                    </p>
                  </li>
                </ul>
                <p class="detail__content--flow--text">※面接日程調整～内定まで2～3週間程度です</p>
                <p class="detail__content--flow--text">※保育士資格不要の正社員応募については、書類選考があります</p>
              </div>
            </div>

            <!--SP版 追従応募ボタン-->
            <div class="detail__content--scroll-wrap">
              <input type="submit" value="WEBで応募" class="detail__content--scroll-btn">
            </div>
            <div class="detail__content--scroll-back">
            </div>

            <!--SP版 応募ボタン-->
            <div class="detail__content--sp-wrap">
              <input type="submit" value="WEBで応募" class="detail__content--sp-btn">
            </div>

          </div>
          <aside class="detail__content--side">
            <div class="detail__content--side--all">
              <div>
                <div class="side-tab__content">
                  <span class="tab__content--cell">
                    <span class="tab__content--cell--text side-tab__content--cell--text tab__content--urgent_recruit">
                      急募
                    </span>
                  </span>
                  <span class="tab__content--cell">
                    <span class="tab__content--cell--text side-tab__content--cell--text tab__content--facility">
                      認可
                    </span>
                  </span>
                  <span class="tab__content--cell">
                    <span class="tab__content--cell--text 
                  side-tab__content--cell--text tab__content--employment">
                      パート
                    </span>
                  </span>
                </div>
                <p class="detail__content--side--job-title">アートチャイルドケア鶴見【保育職員】</p>
              </div>
              <hr>
              <p class="detail__content--side--title">
                <i class="fa-solid fa-comment-dots"></i>
                <span>園長から応募者へ</span>
              </p>
              <div class="detail__content--side--text">
                <p>職場の雰囲気は明るくとても活気に溢れています。職員同士も仲が良く、楽しく向上心をもって仕事に取り組んでいます。互いに助け合って、情熱をもって日々励んでおりますので、一度園見学にいらしてください。お待ちしております。</p>
              </div>
              <div class="detail__content--side--from">
                <p>アートチャイルドケア鶴見 園長</p>
              </div>
              <hr>
              <div class="detail__content--side--wrap-btn">
                <input type="submit" value="WEBで応募" class="detail__content--side--inside-btn">
              </div>
            </div>
          </aside>
        </div>
      </form>

      <div class="content-back">
        <a href="job.php">
          <i class="fa-solid fa-chevron-left"></i>
          求人表示へ戻る
        </a>
      </div>
    </div>
  </section>
</main>

<?php include('./inc/footer.php'); ?>