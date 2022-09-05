// ウインドウの横幅を保持
let currentWidth = window.innerWidth;

window.addEventListener("resize", function () {
  if (currentWidth == window.innerWidth) {
    // ウインドウ横幅が変わっていないため処理をキャンセル
    return;
  }
  // ウインドウ横幅が変わったのでリサイズと見なす
  // 横幅を更新
  location.reload();
  currentWidth = window.innerWidth;
});