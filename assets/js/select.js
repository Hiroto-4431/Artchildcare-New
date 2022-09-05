let array = new Array();
array[''] = new Array({ cd: "", label: "都道府県から選択" });
// 北海道エリア
array["hokkaido_area"] = new Array(
  { cd: "", label: "都道府県から選択" },
  { cd: "hokkaido", label: "北海道" }
);
// 東北エリア
array["tohoku_area"] = [
  { cd: "", label: "都道府県から選択" },
  { cd: "aomori", label: "青森県" },
  { cd: "iwate", label: "岩手県" },
  { cd: "miyagi", label: "宮城県" },
  { cd: "akita", label: "秋田県" },
  { cd: "yamagata", label: "山形県" },
  { cd: "fukushima", label: "福島県" }
];
// 関東エリア
array["kanto_area"] = [
  { cd: "", label: "都道府県から選択" },
  { cd: "ibaraki", label: "茨城県" },
  { cd: "tochigi", label: "栃木県" },
  { cd: "gunma", label: "群馬県" },
  { cd: "saitama", label: "埼玉県" },
  { cd: "chiba", label: "千葉県" },
  { cd: "tokyo", label: "東京都" },
  { cd: "kanagawa", label: "神奈川県" }
];
// 中部エリア
array["tyubu_area"] = [
  { cd: "", label: "都道府県から選択" },
  { cd: "nigata", label: "新潟県" },
  { cd: "toyama", label: "富山県" },
  { cd: "ishikawa", label: "石川県" },
  { cd: "fukui", label: "福井県" },
  { cd: "yamanashi", label: "山梨県" },
  { cd: "nagano", label: "長野県" },
  { cd: "gifu", label: "岐阜県" },
  { cd: "shizuoka", label: "静岡県" },
  { cd: "aichi", label: "愛知県" },
];
// 西日本エリア
array["nishinihon_area"] = [
  { cd: "", label: "都道府県から選択" },
  { cd: "mie", label: "三重県" },
  { cd: "shiga", label: "滋賀県" },
  { cd: "kyoto", label: "京都府" },
  { cd: "osaka", label: "大阪府" },
  { cd: "hyogo", label: "兵庫県" },
  { cd: "nara", label: "奈良県" },
  { cd: "wakayama", label: "和歌山県" },
  { cd: "tottori", label: "鳥取県" },
  { cd: "simane", label: "島根県" },
  { cd: "okayama", label: "岡山県" },
  { cd: "hiroshima", label: "広島県" },
  { cd: "yamaguchi", label: "山口県" },
  { cd: "tokushima", label: "徳島県" },
  { cd: "kagawa", label: "香川県" },
  { cd: "ehime", label: "愛媛県" },
  { cd: "kouchi", label: "高知県" }
];
// 九州エリア
array["kyusyu_area"] = [
  { cd: "", label: "都道府県から選択" },
  { cd: "fukuoka", label: "福岡県" },
  { cd: "saga", label: "佐賀県" },
  { cd: "nagasaki", label: "長崎県" },
  { cd: "kumamoto", label: "熊本県" },
  { cd: "oita", label: "大分県" },
  { cd: "miyazaki", label: "宮崎県" },
  { cd: "kagoshima", label: "鹿児島県" },
  { cd: "okinawa", label: "沖縄県" }
];


const prefecture__cells = document.querySelectorAll('.select__prefecture');
const under__line = document.querySelector('.prefecture__hr');

const area = document.getElementById('area');


// エリアを選択したら
document.getElementById('area').onchange = function () {
  for (const prefecture__cell of prefecture__cells) {
    // 「都道府県」を表示
    prefecture__cell.classList.remove('help-none');
    if (document.URL.match("job")) {
      under__line.classList.remove('help-none');
    }

    // 「都道府県」選択肢を追加
    prefecture__sels = document.querySelectorAll("#prefecture");
    for (let prefecture__sel of prefecture__sels) {
      prefecture__sel.options.length = 0
      let changedPref = area.value;
      for (let i = 0; i < array[changedPref].length; i++) {
        let op = document.createElement("option");
        value = array[changedPref][i]
        op.value = value.cd;
        op.text = value.label;
        prefecture__sel.appendChild(op);
      }
    }
  }
}
