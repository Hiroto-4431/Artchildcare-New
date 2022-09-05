<?php include('./inc/header.php'); ?>

<!-- ===== メイン ===== -->
<main id="index">
  <!-- === エリア選択 === -->
  <section id="job" class="top job">
    <!--SP検索背景-->
    <div class="job__back"></div>

    <!--トピックパス-->
    <div class="topic-path">
      <ul>
        <li class="before-position__path">
          <p class="topic-path__num before-position__num">1</p>
          <p class="topic-path__text before-position__text">条件検索</p>
        </li>
        <li class="">
          <p class="topic-path__num current-position__num">2</p>
          <p class="topic-path__text current-position__text">求人表示</p>
        </li>
        <li class="topic-path__num">
          <p class="topic-path__num">3</p>
          <p class="topic-path__text">求人詳細</p>
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
    <div class="job__content">
      <div class="section-title job__content--headline">
        <h1 class="common-title search__headline">
          <img class="section-title__logo" src="./assets/img/job.png">
          求人表示
        </h1>
      </div>


      <div class="job__content--information">
        <div class="job__content--recruit">
          <!--点線-->
          <div class="job__content--recruit--under">
            <p class="job__content--number-top">
              <span class="job__content--number--sub">10</span>
              <span class="job__content--number--line">/</span>
              <span>127</span>
            </p>
          </div>

          <!--求人表示-->
          <form action="form.php" method="post">
            <div class="job__content--list">
              <div class="tab__content">
                <span class="tab__content--cell">
                  <span class="tab__content--cell--text tab__content--urgent_recruit">急募</span>
                </span>
                <span class="tab__content--cell">
                  <span class="tab__content--cell--text tab__content--facility">認可</span>
                </span>
                <span class="tab__content--cell">
                  <span class="tab__content--cell--text tab__content--employment">パート</span>
                </span>
              </div>
              <a href="detail.php">
                <p name="name" class="job__content--title">アートチャイルドケア鶴見【保育職員】</p>
                <input type="hidden" value="" name="job_name" class="job_name_hidden">
              </a>
              <table class="job__content--table">
                <tr>
                  <th>
                    <p>職種</p>
                  </th>
                  <td>
                    認可保育園の保育士
                  </td>
                </tr>
                <tr>
                  <th>
                    <p>資格</p>
                  </th>
                  <td>
                    保育士
                  </td>
                </tr>
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
                <tr>
                  <th>
                    <p>所在地</p>
                  </th>
                  <td>
                    神奈川県横浜市鶴見区鶴見中央3-10　あしほ総合クリニック2階
                  </td>
                </tr>
                <tr>
                  <th>
                    <p>アクセス</p>
                  </th>
                  <td>
                    JR京浜東北線「鶴見駅」 / 京浜急行線「京急鶴見駅」徒歩15分
                  </td>
                </tr>
                <tr>
                  <th>
                    <p>給与</p>
                  </th>
                  <td>
                    時給：1,200円<br>
                    【賞与】おつかれさま賞（業績による）
                  </td>
                </tr>
              </table>
              <div class="job__content--btn">
                <div class="common__btn job__content--btn--detail">
                  <a href="detail.php" class="btn__inner--wrap">
                    <span class="btn__text">詳細はこちら</span>
                    <i class="fa-solid fa-chevron-right"></i>
                  </a>
                </div>
                <div class="job__content--btn--web">
                  <input class="job__content--btn--inside" type="submit" value="WEBで応募">
                </div>
              </div>
            </div>
          </form>

          <!--test-->
          <form action="form.php" method="post">
            <div class="job__content--list">
              <div class="tab__content">
                <span class="tab__content--cell">
                  <span class="tab__content--cell--text tab__content--urgent_recruit">急募</span>
                </span>
                <span class="tab__content--cell">
                  <span class="tab__content--cell--text tab__content--facility">認可</span>
                </span>
                <span class="tab__content--cell">
                  <span class="tab__content--cell--text tab__content--employment">パート</span>
                </span>
              </div>
              <a href="detail.php">
                <p id="job__title" name="name" class="job__content--title">テスト</p>
                <input type="hidden" value="" name="job_name" class="job_name_hidden">
              </a>
              <table class="job__content--table">
                <tr>
                  <th>
                    <p>職種</p>
                  </th>
                  <td>
                    認可保育園の保育士
                  </td>
                </tr>
                <tr>
                  <th>
                    <p>資格</p>
                  </th>
                  <td>
                    保育士
                  </td>
                </tr>
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
                <tr>
                  <th>
                    <p>所在地</p>
                  </th>
                  <td>
                    神奈川県横浜市鶴見区鶴見中央3-10　あしほ総合クリニック2階
                  </td>
                </tr>
                <tr>
                  <th>
                    <p>アクセス</p>
                  </th>
                  <td>
                    JR京浜東北線「鶴見駅」 / 京浜急行線「京急鶴見駅」徒歩15分
                  </td>
                </tr>
                <tr>
                  <th>
                    <p>給与</p>
                  </th>
                  <td>
                    時給：1,200円<br>
                    【賞与】おつかれさま賞（業績による）
                  </td>
                </tr>
              </table>
              <div class="job__content--btn">
                <div class="common__btn job__content--btn--detail">
                  <a href="detail.php" class="btn__inner--wrap">
                    <span class="btn__text">詳細はこちら</span>
                    <i class="fa-solid fa-chevron-right"></i>
                  </a>
                </div>
                <div class="job__content--btn--web">
                  <input class="job__content--btn--inside" type="submit" value="WEBで応募">
                </div>
              </div>
            </div>
          </form>

          <!--ページネーション-->
          <div class="page__info">
            <div class="page__place">
              <p class="job__content--number">
                <span class="job__content--number--sub">10</span>
                <span class="job__content--number--line">/</span>
                <span>127</span>
              </p>
            </div>
            <div class="pagination">
              <ul class="pagination__wrap">
                <li class="all_back"><a href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                <li class="next_back"><a href="#"><i class="fa-solid fa-chevron-left"></i> 前へ </a></li>
                <li class="number_page current_page"><a href="#">1</a></li>
                <li class="number_page"><a href="#">2</a></li>
                <li class="number_page"><a href="#">3</a></li>
                <li class="number_page four_page"><a href="#">4</a></li>
                <li>...</li>
                <li class="next_jump"><a href="#">次へ <i class="fa-solid fa-chevron-right"></i></a></li>
                <li class="all_jump"><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
              </ul>
            </div>
          </div>

        </div>

        <aside class="job__content--side" id="search__box">
          <!-- <div class="job__content--side--back"> -->
          <div class="job__content--side--all">
            <!--条件表示-->
            <a href="#" class="job__content--side--title job__content--side--title-sp" onclick="search__open()">
              <span class="job__content--side--title--line1">
                <i class="fa-solid fa-magnifying-glass"></i>
                <p>条件検索</p>
              </span>
              <span class="job__content--side--title-sp--mark">＋</span>
            </a>
            <div class="job__content--side--search help-md-none">
              <!--エリアから探す-->
              <div class="job__content--side--area">
                <p class="job__content--side--headline">エリアから探す</p>
                <div class="select__wrap--side">
                  <select id="area">
                    <option value="" selected>エリアから選択</option>
                    <option value="hokkaido_area">北海道エリア</option>
                    <option value="tohoku_area">東北エリア</option>
                    <option value="kanto_area">関東エリア</option>
                    <option value="tyubu_area">中部エリア</option>
                    <option value="nisinihon_area">西日本エリア</option>
                    <option value="kyusyu_area">九州エリア</option>
                  </select>
                </div>
              </div>
              <hr>
              <!--都道府県から探す-->
              <div class="job__content--side--prefecture select__prefecture help-none">
                <p class="job__content--side--headline">都道府県から探す</p>
                <div class="select__wrap--side">
                  <select id="prefecture">
                    <option value="" selected>都道府県から選択</option>
                  </select>
                </div>
              </div>
              <hr class="prefecture__hr help-none">
              <!--雇用形態から探す-->
              <div class="job__content--side--employment">
                <p class="job__content--side--headline">雇用形態から探す</p>
                <div class="job__content--side--checkbox">
                  <label for="regular_employee">
                    <input id="regular_employee" type="checkbox">
                    <span class="job__content--checkbox--text">正社員</span>
                  </label>
                  <label for="local_limitations" class="job__content--second">
                    <div>
                      <input id="local_limitations" type="checkbox">
                      <span class="job__content--checkbox--text">正社員(地域限定)</span>
                    </div>
                    <div class="tooltip">
                      <img src="./assets/img/tooltip.png" class="tooltip__content">
                      <img src="./assets/img/tooltip_hover.png" class="tooltip__content--hover">
                      <div class="tooltip__text">
                        <p>転居を伴わない<br>正社員のことです。</p>
                      </div>
                    </div>
                  </label>
                  <label for="contract_employee">
                    <input id="contract_employee" type="checkbox">
                    <span class="job__content--checkbox--text">契約社員</span>
                  </label>
                  <label for="part">
                    <input id="part" type="checkbox">
                    <span class="job__content--checkbox--text">パート</span>
                  </label>
                </div>
              </div>
              <hr>
              <!--資格から探す-->
              <div class="job__content--side--qualification">
                <p class="job__content--side--headline">資格から探す</p>
                <div class="job__content--side--checkbox">
                  <label for="nursery_school_teacher">
                    <input id="nursery_school_teacher" type="checkbox">
                    <span class="job__content--checkbox--text">保育士</span>
                  </label>
                  <label for="kindergarten_teacher">
                    <input id="kindergarten_teacher" type="checkbox">
                    <span class="job__content--checkbox--text">幼稚園教論</span>
                  </label>
                  <label for="nutritionist">
                    <input id="nutritionist" type="checkbox">
                    <span class="job__content--checkbox--text">栄養士</span>
                  </label>
                  <label for="cook">
                    <input id="cook" type="checkbox">
                    <span class="job__content--checkbox--text">調理師</span>
                  </label>
                  <label for="registered_nurse">
                    <input id="registered_nurse" type="checkbox">
                    <span class="job__content--checkbox--text">正看護師</span>
                  </label>
                  <label for="associate_caregivers">
                    <input id="associate_caregivers" type="checkbox">
                    <span class="job__content--checkbox--text">准看護師</span>
                  </label>
                  <label for="child_development_support_supervisor">
                    <input id="child_development_support_supervisor" type="checkbox">
                    <span class="job__content--checkbox--text">児童発達支援管理責任者</span>
                  </label>
                  <label for="music_therapist">
                    <input id="music_therapist" type="checkbox">
                    <span class="job__content--checkbox--text">音楽療法士</span>
                  </label>
                  <label for="special_support_school_theory">
                    <input id="special_support_school_theory" type="checkbox">
                    <span class="job__content--checkbox--text">特別支援学校教論</span>
                  </label>
                  <label for="social_worker">
                    <input id="social_worker" type="checkbox">
                    <span class="job__content--checkbox--text">社会福祉士</span>
                  </label>
                  <label for="care_worker">
                    <input id="care_worker" type="checkbox">
                    <span class="job__content--checkbox--text">介護福祉士</span>
                  </label>
                  <label for="helper">
                    <input id="helper" type="checkbox">
                    <span class="job__content--checkbox--text">ヘルパー</span>
                  </label>
                  <label for="mental_health_worker">
                    <input id="mental_health_worker" type="checkbox">
                    <span class="job__content--checkbox--text">精神保健福祉士</span>
                  </label>
                  <label for="occupational_therapist">
                    <input id="occupational_therapist" type="checkbox">
                    <span class="job__content--checkbox--text">作業療法士</span>
                  </label>
                  <label for="speech_therapist">
                    <input id="speech_therapist" type="checkbox">
                    <span class="job__content--checkbox--text">言語聴覚士</span>
                  </label>
                  <label for="clinical_psychologist">
                    <input id="clinical_psychologist" type="checkbox">
                    <span class="job__content--checkbox--text">臨床心理士</span>
                  </label>
                  <label for="clinical_developmental_psychologist">
                    <input id="clinical_developmental_psychologist" type="checkbox">
                    <span class="job__content--checkbox--text">臨床発達心理士</span>
                  </label>
                  <label for="licensed_psychologist">
                    <input id="licensed_psychologist" type="checkbox">
                    <span class="job__content--checkbox--text">公認心理士</span>
                  </label>
                  <label for="no_qualifications">
                    <input id="no_qualifications" type="checkbox">
                    <span class="job__content--checkbox--text">資格なしOK</span>
                  </label>
                  <label for="other_qualification">
                    <input id="other_qualification" type="checkbox">
                    <span class="job__content--checkbox--text">その他</span>
                  </label>
                </div>
              </div>
              <hr>
              <!--施設形態から探す-->
              <div class="job__content--side--facility">
                <p class="job__content--side--headline">施設形態から探す</p>
                <div class="job__content--side--checkbox">
                  <label for="licensed_day_nursery_school">
                    <input id="licensed_day_nursery_school" type="checkbox">
                    <span class="job__content--checkbox--text">認可保育園</span>
                  </label>
                  <label for="certified_nursery_school">
                    <input id="certified_nursery_school" type="checkbox">
                    <span class="job__content--checkbox--text">認証保育所</span>
                  </label>
                  <label for="nursery_school_within_an_office">
                    <input id="nursery_school_within_an_office" type="checkbox">
                    <span class="job__content--checkbox--text">事業所内保育所（院内・企業）</span>
                  </label>
                  <label for="child_development_support_class">
                    <input id="child_development_support_class" type="checkbox">
                    <span class="job__content--checkbox--text">児童発達支援教室</span>
                  </label>
                  <label for="day_service">
                    <input id="day_service" type="checkbox">
                    <span class="job__content--checkbox--text">児童発達支援・放課後等デイサービス</span>
                  </label>
                  <label for="other_facility">
                    <input id="other_facility" type="checkbox">
                    <span class="job__content--checkbox--text">その他</span>
                  </label>
                </div>
              </div>
              <hr>
              <!--フリーワードから探す-->
              <div class="job__content--side--free">
                <p class="job__content--side--headline">フリーワードから探す</p>
                <input type="text" placeholder="キーワードを入力してください">
              </div>
              <hr>
              <!--検索ボタン-->
              <button type="button" class="common__btn common__btn--width job__content--side--btn" onclick="location.href='./job.php'">
                <span class="btn__inner--wrap">
                  <span class="btn__text">検索</span>
                  <i class="fa-solid fa-chevron-right"></i>
                </span>
              </button>
            </div>
          </div>
          <!-- </div> -->
          <div class="section-title job__content--headline job__content--headline--under help-none search__headline">
            <h1 class="common-title">
              <img class="section-title__logo" src="./assets/img/job.png">
              求人表示
            </h1>
          </div>

        </aside>

      </div>

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