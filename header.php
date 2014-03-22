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
  <ul class="no-bullet gnav-items">
    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/nav01.png" alt="ステキ★理系女子"></a></li>
    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/nav02.png" alt="キラリ★企業紹介"></a></li>
    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/nav03.png" alt="STEM Cafe"></a></li>
    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/assets/images/share/nav04.png" alt="Kawaii x Science News"></a></li>
  </ul>
</nav>
    </div>
  </div>
</header>
     
  <div class="row content">
    <div class="large-12 columns">