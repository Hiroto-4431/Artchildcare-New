  <!-- ===== フッター ===== -->
  <footer class="footer">
    <p><small>&copy; ART CHILDCARE CORPORATION.</small></p>
  </footer>

  <!-- jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

  <!-- common js -->
  <script src="./assets/js/common.js"></script>
  <!-- polyfill js -->
  <script src="./assets/js/polyfill.js"></script>

  <?php $url = $_SERVER['REQUEST_URI']; ?>
  <?php if (strstr($url, 'condition')) : ?>
    <!-- select js -->
    <script src="./assets/js/select.js"></script>
  <?php elseif (strstr($url, 'job')) : ?>
    <!-- select js -->
    <script src="./assets/js/select.js"></script>
    <!-- search js -->
    <script src="./assets/js/search.js"></script>
    <!-- job_name-2 js -->
    <script src="./assets/js/job_name-2.js"></script>
    <!-- reload js -->
    <script src="./assets/js/reload.js"></script>
  <?php elseif (strstr($url, 'detail')) : ?>
    <!-- modal js -->
    <script src="./assets/js/modal.js"></script>
    <!-- scroll-btn js -->
    <script src="./assets/js/scroll-btn.js"></script>
    <!-- rewrite js -->
    <script src="./assets/js/rewrite.js"></script>
    <!-- job_name-1 js -->
    <script src="./assets/js/job_name-1.js"></script>
    <!-- reload js -->
    <script src="./assets/js/reload.js"></script>
    <!-- swiper -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <?php endif; ?>


  </body>

  </html>