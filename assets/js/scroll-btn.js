const scroll_btn = document.querySelector('.detail__content--scroll-btn');
const scroll_btn_back = document.querySelector('.detail__content--scroll-back');
const scroll_btn_wrap = document.querySelector('.detail__content--scroll-wrap');

const window_innerWidth = window.innerWidth;
const Point = 960;

//スクロールした際の動きを関数でまとめる
function setFadeElement() {
  if (window_innerWidth < Point) {
    //ウィンドウの高さを取得
    let windowH = document.documentElement.clientHeight;
    //スクロール値を取得
    let scroll = document.documentElement.scrollTop || document.body.scrollTop;

    //出現範囲の指定
    //要素までの高さを四捨五入した値で取得
    let rangeMain = document.querySelector('.detail__content--range');
    let rect = rangeMain.getBoundingClientRect();
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let contentsTop = rect.top + scrollTop;


    //要素の高さを取得
    let contentsH = document.querySelector('.detail__content--range').offsetHeight;

    //出現範囲内に入ったかどうかをチェック
    if (scroll + windowH >= contentsTop && scroll + windowH <= contentsTop + contentsH) {
      scroll_btn.classList.add('help-block');
      scroll_btn_back.classList.add('help-block');
      scroll_btn_wrap.classList.add('help-block');
    }
    else {
      scroll_btn.classList.remove('help-block');
      scroll_btn_back.classList.remove('help-block');
      scroll_btn_wrap.classList.remove('help-block');
    }
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
window.addEventListener('scroll', function () {
  setFadeElement();
});