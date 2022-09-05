/*************************/
/*    「求人詳細」ページ    */
/*         モーダル       */
/*************************/
const modal = document.querySelector('.modal');
const triggers = document.querySelectorAll('.modal__trigger');
const modal_overlay = document.querySelector('.modal__overlay');
const close_mark = document.querySelector('.close__mark');


// モーダルオープン
triggers.forEach(function (trigger) {
  trigger.addEventListener('click', function () {
    modal.classList.add('active');
  });
});

// モーダルクローズ
modal_overlay.addEventListener('click', function () {
  modal.classList.remove('active');
});
close_mark.addEventListener('click', function () {
  modal.classList.remove('active');
});



window.addEventListener("DOMContentLoaded", () => {
  // モーダルを取得
  const modal = document.getElementById("modal");

  // Swiperの設定
  const swiper = new Swiper(".swiper", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    spaceBetween: 30,
  });

  // モーダルを表示するボタンをクリックしたとき
  triggers.forEach((trigger) => {
    trigger.addEventListener("click", () => {
      // data-slide-indexに設定したスライド番号を取得
      const modalIndex = trigger.dataset.slideIndex;
      swiper.slideTo(modalIndex);
      modal.classList.add("active");
    });
  });

  // モーダルを閉じるボタンをクリックしたとき
  closeModalBtns.forEach((closeModalBtn) => {
    closeModalBtn.addEventListener("click", () => {
      modal.classList.remove("active");
    });
  });
});