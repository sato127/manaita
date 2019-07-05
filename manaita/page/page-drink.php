<?php
/*
Template Name: ドリンクメニュー用テンプレート
*/ ?>
<?php get_header(1);?>
    <div class="container">
      <div class="inner">

        <section id="drink_free">
          <h3>飲み放題メニュー</h3>
          <div class="pay">
            <h4>【料金】</h4>
            <h4>1500円　/　2000円</h4>
          </div>
          <ul class="limit">
            <li>【利用条件】</li>
            <li>※飲み放題は、全員が同じ料金になります。</li>
            <li>※他のサービス券との併用はできません。</li>
            <li>※1グラス制となっております。</li>
          </ul>
          <ul class="free_menu">
            <li>●ビール・ワイン
              <p>ビール：サッポロ黒ラベルビール（ピッチャー）/ ワイン：赤・白</p>
            </li>
            <li>●サワー・カクテル
              <p>レモン・グレープフルーツ・ジャスミン・ウーロン・緑茶・元気（リアルゴールド）・カシスソーダ・カシスオレンジ・カシスグレープフルーツ・カシスウーロン
                ・ピーチジンジャー・ピーチソーダ（ピーチツリーフィズ）・ピーチオレンジ（ファジーネーブル）・ピーチコーラ・ラムコーク（キューバリバー）・ディタグレ
                ープフルーツ・ディタオレンジ・シャンディーガフ・カルーアミルク</p>
              </li>
              <li>●ハイボール
                <p>角ハイボール・角ジンジャーハイボール・角コークハイボール</p>
              </li>
              <li>●果実酒
                <p>梅酒・杏露酒（ロック・水割り・ソーダ割り・お湯割り）</p>
              </li>
              <li>●ソフトドリンク
                <p>オレンジジュース・グレープフルーツジュース・コーラ・ウーロン茶・緑茶・ジャスミン茶・温かいお茶・ジンジャエール</p>
              </li>
              <li>【 2000円コース 】
                <p>お店にあるものほぼ全てのお酒が飲み放題！</p>
                </li>
          </ul>
        </section>
        <section id="flex"><!--       flex1       -->
          <div class="left">
            <h3>生ビール</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>10//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>
          <div class="right">
            <h3>焼酎</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>11//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>
        </section>
        <section id="flex"><!--       flex2       -->
          <div class="left">
            <h3>果実酒</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>12//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
              <li class="relative">
                <p>※ロック・水割り・お湯割り・ソーダ割りをご用意しております。</p>
              </li>
            </ul>
          </div>
          <div class="right">
            <h3>日本酒</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>13//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>
        </section>
        <section id="flex"><!--       flex3       -->
          <div class="left">
            <h3>ワイン</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>14//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>
          <div class="right">
            <h3>カクテル</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>15//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
              <li class="relative">
                <p>※上記から組み合わせてご注文ください。</p>
              </li>
            </ul>
          </div>
        </section>
        <section id="flex"><!--       flex4       -->
          <div class="left">
            <h3>サワー</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>16//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>
          <div class="right">
            <h3>ハイボール</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>17//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>
        </section>
        <section id="flex"><!--       flex5       -->
          <div class="left">
            <h3>ソフトドリンク</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>18//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>
          <div class="right">
            <h3>ノンアルコール</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'drinkmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>19//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
              );
              $wp_query->query($param);

              if($wp_query->have_posts()):
                while($wp_query->have_posts()):
                  $wp_query->the_post();
              ?>

              <li class="relative">
                <?php the_field('menu_name');?>
                <span><?php the_field('price');?></span>
                <p><?php the_field('comment');?></p>
              </li>
                <?php endwhile;?>
                <?php endif;?>
            </ul>
          </div>

        </section>
      </div>

      <?php get_footer();?>
