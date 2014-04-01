
    <footer class="footer">
  <div class="primary">
    <div class="row">
      <div class="large-12 columns">

        <div class="ranking">
          <div class="ranking-ttl">アクセスランキング</div>

          <?php wpp_get_mostpopular(
            "limit=6&
            range='all'&
            post_type='rikejo'&
            stats_comments=0&
            thumbnail_width=100&
            thumbnail_height=100&
            post_html='<li>{thumb} <a href='{url}'>{stats}{text_title}</a> </li>'
            "
          ) ?>

        </div>
      
        <div class="support">
          <div class="supported-by">
            <hr>
            <span>supported by</span>
          </div>
          <ul class="no-bullet supported-list inline-list">
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter01.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter02.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter01.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter02.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter01.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter02.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter01.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter02.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter01.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter02.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter01.png" alt=""></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/supporter02.png" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary">
    <div class="row">
      <div class="large-12 columns">
        <div class="toTop">
          <a href="#top"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/toTop.png" alt="ページ上部へ戻る"></a>
        </div>
        <div class="flogo">
          <a href="index.html"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/flogo.png" alt="カワイイxカガク"></a>
        </div>
        <nav class="fnav">
          <ul class="no-bullet inline-list">
            <li><a href="contact">お問い合わせ</a></li>
            <li><a href="policy.html">プライバシーポリシー</a></li>
            <li><a href="company.html">企画運営</a></li>
          </ul>
        </nav>
        <nav class="social">
          <ul class="no-bullet inline-list">
            <li class="tw"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/twitter.png" alt=""></li>
            <li class="fb"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/facebook.png" alt=""></li>
          </ul>
        </nav>
        <address>Copyrights &copy; ANESTA Inc. All Rights Reserved.</address>
      </div>
    </div>
  </div>
</footer>
    <script src="assets/js/vendor/jquery.min.js"></script>
<script src="assets/js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>

<?php wp_footer() ?>

  </body>
</html>