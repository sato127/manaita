<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>演習_真魚板</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/vegas/vegas.min.css" />
    <?php if(is_front_page()):?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <?php else:?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/page/page.css">
    <?php endif;?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script script type="text/javascript" src="<?php echo get_template_directory_uri();?>/vegas/vegas.min.js"></script>
    <script script type="text/javascript" src="<?php echo get_template_directory_uri();?>/function.js"></script>
    <?php wp_head();?>
  </head>

  <body>
    <!--    header    -->
    <header>
      <h1><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/image/manaita_name.png" alt="遊食ダイニング 真魚板"></a></h1>
      <!--ハンバーガーメニュー-->
      <div id="hamburger">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <nav>
        <ul>
          <li><a href="<?php echo home_url();?>">TOP</a></li>
          <li><a href="<?php echo home_url("picky");?>">私達のこだわり</a></li>
          <li><a href="<?php echo home_url("food");?>">フードメニュー</a></li>
          <li><a href="<?php echo home_url("drink");?>">ドリンクメニュー</a></li>
        </ul>
      </nav>
    </header>
    <?php if(!is_front_page()):?>
    <section id="top">
    <div class="top_img">
      <img src="<?php echo get_template_directory_uri();?>/image/image_column.jpg" alt="新着情報">
    </div>
    <?php if(is_page()):?>
      <div class="info">
        <a href="<?php echo home_url();?>">TOP</a>
        <p><?php the_title();?></p>
    </div>
    <div class="title">
      <h2><?php the_title();?></h2>
    </div>
    <?php endif;?>
    </section>
  <?php endif;?>
