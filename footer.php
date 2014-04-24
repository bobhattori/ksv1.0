
    <footer class="footer">
  <div class="primary">
    <div class="row">
      <div class="large-12 columns">

        <div class="ranking">
          <div class="ranking-ttl">アクセスランキング</div>

          <?php wpp_get_mostpopular(
            "limit=6&
            title_length=20&
            range='all'&
            post_type='girls,companies,news,stemcafe'&
            stats_comments=0&
            thumbnail_width=100&
            thumbnail_height=100&
            post_html='<li>{thumb} <a href='{url}'>{stats}{text_title}</a> </li>'
            "
          ) ?>
<a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?></a>
        </div>
      
        <div class="support">
          <div class="supported-by">
            <hr>
            <span>supported by</span>
          </div>
            <?php
              $page_id = get_page_by_path('supported')->ID;
              $page = get_post($page_id);
              $page_con = $page -> post_content;
            ?>
            <?php echo $page_con ?>
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
            <li><a href="<?php bloginfo('url')?>/contact">お問い合わせ</a></li>
            <li><a href="<?php bloginfo('url')?>/policy">プライバシーポリシー</a></li>
            <li><a href="<?php bloginfo('url')?>/anesta">企画運営</a></li>
          </ul>
        </nav>
        <nav class="social">
          <ul class="no-bullet inline-list">
            <li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-via="bobhattori" data-count="none">Tweet</a></li>
            <li class="fb"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/facebook.png" alt=""></li>
          </ul>
        </nav>
        <address>Copyrights &copy; ANESTA Inc. All Rights Reserved.</address>
      </div>
    </div>
  </div>
</footer>
<script src="<?php bloginfo('template_directory') ?>/assets/js/vendor/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/foundation.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/lib/jquery.bxslider.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/script.js"></script>
<script>
$(document).foundation();
</script>

<?php wp_footer() ?>

  </body>
</html>