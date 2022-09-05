/*************************/
/*    「求人表示」ページ    */
/*       SP用条件表示      */
/*************************/
const open__btn = document.querySelector('.job__content--side--tile');
const search__content = document.querySelector('.job__content--side--search');
const titles = document.querySelectorAll('.search__headline');
const mark = document.querySelector('.job__content--side--title-sp--mark');
const search__box = document.querySelector('.job__content--side');

// stickyを監視
const window_innerWidth = window.innerWidth;
const Point = 960;

const white = document.querySelector('.job__back');
const observer = new IntersectionObserver(entries => {
  if (window_innerWidth < Point) {
    for (const entry of entries) {
      if (entry.isIntersecting) {
        // 「条件表示」が固定されていない場合の処理
        white.classList.remove('help-block');
      } else {
        // 「条件表示」が固定されている場合の処理
        white.classList.add('help-block');
      }
    }
  };
});
observer.observe(document.querySelector('.search__headline'));

// 「検索」ボックスを開けたら
function search__open() {
  // 画面幅が960px以下だった場合
  if (window_innerWidth < Point) {
    search__content.classList.toggle('help-md-none');
    search__box.classList.toggle('help-search-margin');
    for (const title of titles) {
      title.classList.toggle('help-none');
    }
    if (search__content.classList.contains('help-md-none') == true) {
      mark.textContent = '＋';
    } else {
      mark.textContent = 'ー';
    }
    search__box.classList.toggle('help-static');
    white.classList.toggle('help-none');
  }

}