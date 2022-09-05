const content = document.querySelector('.detail__content--side--text');
const content_text = content.innerHTML;

const from = document.querySelector('.detail__content--side--from');
const from_text = from.innerHTML;

const sp_content = document.querySelector('.detail__content--message--content');
const sp_from = document.querySelector('.detail__content--message--from');

// 「園長から応募者へ」コンテンツ書き換え
sp_content.innerHTML = content_text;
sp_from.innerHTML = from_text;