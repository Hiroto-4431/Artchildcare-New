<?php include('./inc/header.php'); ?>

<!-- ===== メイン ===== -->
<main id="index">
  <section id="condition" class="top condition">
    <!--トピックパス-->
    <div class="topic-path">
      <ul>
        <li>
          <p class="topic-path__num current-position__num">1</p>
          <p class="topic-path__text current-position__text">条件検索</p>
        </li>
        <li>
          <p class="topic-path__num">2</p>
          <p class="topic-path__text">求人表示</p>
        </li>
        <li>
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

    <div class="condition__content">
      <!--ヘッドライン-->
      <div class="section-title condition__content--headline">
        <h1 class="common-title">
          <i class="fa-solid fa-magnifying-glass"></i>
          条件検索
        </h1>
      </div>

      <!--コンテンツ-->
      <div class="condition__content--form-wrapper">
        <form action="complete.php" method="post">
          <table class="condition__content--table">
            <!--エリア-->
            <tr class="condition__content--cell">
              <th class="condition__content--cell--title">
                <label for="area">エリアから探す</label>
              </th>
              <td class="condition__content--cell--text">
                <div class="select__wrap">
                  <select class="" id="area">
                    <option value="" selected>エリアから選択</option>
                    <option value="hokkaido_area">北海道エリア</option>
                    <option value="tohoku_area">東北エリア</option>
                    <option value="kanto_area">関東エリア</option>
                    <option value="tyubu_area">中部エリア</option>
                    <option value="nishinihon_area">西日本エリア</option>
                    <option value="kyusyu_area">九州エリア</option>
                  </select>
                </div>
              </td>
            </tr>

            <!--都道府県-->
            <tr class="condition__content--cell select__prefecture help-none">
              <th class="condition__content--cell--title">
                <label for="prefecture">都道府県</label>
              </th>
              <td class="condition__content--cell--text">
                <div class="select__wrap">
                  <select class="" id="prefecture">
                    <option value="" selected>都道府県から選択</option>
                  </select>
                </div>
              </td>
            </tr>

            <!--雇用形態-->
            <tr class="condition__content--cell">
              <th class="condition__content--cell--title">
                <label for="name_read">雇用形態から探す</label>
              </th>
              <td class="condition__content--cell--text checkbox__wrap">
                <label class="condition__content--cell--checkbox" for="regular_employee">
                  <input type="checkbox" id="regular_employee" name="" class=""><span class="condition__content--checkbox--text">正社員</span>
                </label>
                <label for="local_limitations">
                  <input type="checkbox" id="local_limitations" name="" class=""><span class="condition__content--checkbox--text">正社員(地域限定)</span>
                  <div class="tooltip">
                    <img src="./assets/img/tooltip.png" class="tooltip__content">
                    <img src="./assets/img/tooltip_hover.png" class="tooltip__content--hover">
                    <div class="tooltip__text">
                      <p>転居を伴わない<br>正社員のことです。</p>
                    </div>
                  </div>
                </label>
                <label for="contract_employee">
                  <input type="checkbox" id="contract_employee" name="" class=""><span class="condition__content--checkbox--text">契約社員</span>
                </label>
                <label for="part">
                  <input type="checkbox" id="part" name="" class=""><span class="condition__content--checkbox--text">パート</span>
                </label>
              </td>
            </tr>

            <!--資格-->
            <tr class="condition__content--cell">
              <th class="condition__content--cell--title">
                <label for="name_read">資格から探す</label>
              </th>
              <td class="condition__content--cell--text checkbox__wrap">
                <label for="nursery_school_teacher">
                  <input id="nursery_school_teacher" type="checkbox">
                  <span class="condition__content--checkbox--text">保育士</span>
                </label>
                <label for="kindergarten_teacher">
                  <input id="kindergarten_teacher" type="checkbox">
                  <span class="condition__content--checkbox--text">幼稚園教論</span>
                </label>
                <label for="nutritionist">
                  <input id="nutritionist" type="checkbox">
                  <span class="condition__content--checkbox--text">栄養士</span>
                </label>
                <label for="cook">
                  <input id="cook" type="checkbox">
                  <span class="condition__content--checkbox--text">調理師</span>
                </label>
                <label for="registered_nurse">
                  <input id="registered_nurse" type="checkbox">
                  <span class="condition__content--checkbox--text">正看護師</span>
                </label>
                <label for="associate_caregivers">
                  <input id="associate_caregivers" type="checkbox">
                  <span class="condition__content--checkbox--text">准看護師</span>
                </label>
                <label for="child_development_support_supervisor">
                  <input id="child_development_support_supervisor" type="checkbox">
                  <span class="condition__content--checkbox--text">児童発達支援管理責任者</span>
                </label>
                <label for="music_therapist">
                  <input id="music_therapist" type="checkbox">
                  <span class="condition__content--checkbox--text">音楽療法士</span>
                </label>
                <label for="special_support_school_theory">
                  <input id="special_support_school_theory" type="checkbox">
                  <span class="condition__content--checkbox--text">特別支援学校教論</span>
                </label>
                <label for="social_worker">
                  <input id="social_worker" type="checkbox">
                  <span class="condition__content--checkbox--text">社会福祉士</span>
                </label>
                <label for="care_worker">
                  <input id="care_worker" type="checkbox">
                  <span class="condition__content--checkbox--text">介護福祉士</span>
                </label>
                <label for="helper">
                  <input id="helper" type="checkbox">
                  <span class="condition__content--checkbox--text">ヘルパー</span>
                </label>
                <label for="mental_health_worker">
                  <input id="mental_health_worker" type="checkbox">
                  <span class="condition__content--checkbox--text">精神保健福祉士</span>
                </label>
                <label for="occupational_therapist">
                  <input id="occupational_therapist" type="checkbox">
                  <span class="condition__content--checkbox--text">作業療法士</span>
                </label>
                <label for="speech_therapist">
                  <input id="speech_therapist" type="checkbox">
                  <span class="condition__content--checkbox--text">言語聴覚士</span>
                </label>
                <label for="clinical_psychologist">
                  <input id="clinical_psychologist" type="checkbox">
                  <span class="condition__content--checkbox--text">臨床心理士</span>
                </label>
                <label for="clinical_developmental_psychologist">
                  <input id="clinical_developmental_psychologist" type="checkbox">
                  <span class="condition__content--checkbox--text">臨床発達心理士</span>
                </label>
                <label for="licensed_psychologist">
                  <input id="licensed_psychologist" type="checkbox">
                  <span class="condition__content--checkbox--text">公認心理士</span>
                </label>
                <label for="no_qualifications">
                  <input id="no_qualifications" type="checkbox">
                  <span class="condition__content--checkbox--text">資格なしOK</span>
                </label>
                <label for="other_qualification">
                  <input id="other_qualification" type="checkbox">
                  <span class="condition__content--checkbox--text">その他</span>
                </label>

              </td>
            </tr>

            <!--施設形態-->
            <tr class="condition__content--cell">
              <th class="condition__content--cell--title">
                <label for="name_read">施設形態から探す</label>
              </th>
              <td class="condition__content--cell--text checkbox__wrap">
                <label for="licensed_day_nursery_school">
                  <input id="licensed_day_nursery_school" type="checkbox">
                  <span class="condition__content--checkbox--text">認可保育園</span>
                </label>
                <label for="certified_nursery_school">
                  <input id="certified_nursery_school" type="checkbox">
                  <span class="condition__content--checkbox--text">認証保育所</span>
                </label>
                <label for="nursery_school_within_an_office">
                  <input id="nursery_school_within_an_office" type="checkbox">
                  <span class="condition__content--checkbox--text">事業所内保育所（院内・企業）</span>
                </label>
                <label for="child_development_support_class">
                  <input id="child_development_support_class" type="checkbox">
                  <span class="condition__content--checkbox--text">児童発達支援教室</span>
                </label>
                <label for="day_service">
                  <input id="day_service" type="checkbox">
                  <span class="condition__content--checkbox--text">児童発達支援・放課後等デイサービス</span>
                </label>
                <label for="other_facility">
                  <input id="other_facility" type="checkbox">
                  <span class="condition__content--checkbox--text">その他</span>
                </label>

              </td>
            </tr>

            <!--フリーワード-->
            <tr class="condition__content--cell">
              <th class="condition__content--cell--title">
                <label for="school">フリーワード検索</label>
              </th>
              <td class="condition__content--cell--text">
                <label for="">
                  <input type="text" name="" placeholder="キーワードを入力してください" class="">
                </label>
              </td>
            </tr>
          </table>

          <!--検索-->
          <button type="button" class="common__btn condition__content--btn" onclick="location.href='./job.php'">
            <span class="btn__inner--wrap">
              <span class="btn__text">検索</span>
              <i class="fa-solid fa-chevron-right"></i>
            </span>
          </button>

        </form>
      </div>


    </div>
  </section>
</main>

<?php include('./inc/footer.php'); ?>