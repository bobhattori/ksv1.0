<!doctype html>
<html class="no-js" lang="ja">
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if(!is_home()): ?><?php the_title() ?> |<?php endif; ?><?php bloginfo('name') ?></title>
      <link href="<?php bloginfo('template_directory') ?>/assets/css/app.min.css" rel="stylesheet" type="text/css" media="all" />
      <script src="<?php bloginfo('template_directory') ?>/assets/js/vendor/modernizr.min.js"></script>

      <!-- web fonts -->
      <link href='http://fonts.googleapis.com/css?family=Lusitana' rel='stylesheet' type='text/css'>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

      <?php wp_head() ?>

  </head>
  <body <?php body_class() ?>>

    <header class="header">
  <div class="row">
    <div class="large-12 columns">
      <div class="header-inner">
        
        <h1 class="logo"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/logo.png" alt="カワイイxカガク"></h1>

        <div class="search">
          <form action="<?php bloginfo('url') ?>">
            <input type="text" name="s" id="s" placeholder="Search">
            <button class="search-btn"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/search-btn.png" alt="search"></button>
          </form>
        </div>
      </div>
      <nav class="gnav">
        <div class="row collapse">
          <div class="large-3 medium-3 small-6 columns">
            <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/nav01.png" alt="ステキ★理系女子"></a>
          </div>
          <div class="large-3 medium-3 small-6 columns">
            <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/nav02.png" alt="キラリ★企業紹介"></a>
          </div>
          <div class="large-3 medium-3 small-6 columns">
            <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/nav03.png" alt="STEM Cafe"></a>
          </div>
          <div class="large-3 medium-3 small-6 columns">
            <a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/nav04.png" alt="Kawaii x Science News"></a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>