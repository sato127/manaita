<?php
/*
Template Name: フードメニュー用テンプレート
*/ ?>
<?php get_header();?>
    <div class="container">
      <div class="inner">
        <section id="flex"><!--       flex1       -->
          <div class="left">
            <h3>本日のおすすめ
              <span>(下記は一例です。)</span>
            </h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'foodmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>2//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
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
                <p>※仕入れ状況によって価格が変動します。詳しくはスタッフまでお尋ねください。</p>
              </li>
            </ul>
          </div>
          <div class="right">
            <h3>人気ベスト5</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'foodmenu',//foodmenuの中から全件表示
                'cat'=>3//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
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
        <section id="flex"><!--       flex2        -->
          <div class="left">
            <h3>ワインに合うおつまみ</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'foodmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>4//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
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
            <h3>定番料理</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'foodmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>5//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
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
            <h3>鍋もの(2人前～)</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'foodmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>6//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
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
            <h3>ALL350円</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'foodmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>7//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
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
        <section id="flex"><!--       flex4       -->
          <div class="left">
          <h3>ご飯もの</h3>
          <ul>
            <?php $wp_query=new WP_Query();
            $param=array(
              'posts_per_page'=>'-1',//-1は全件表示
              'post_type'=>'foodmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
              'cat'=>8//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
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
            <h3>デザート</h3>
            <ul>
              <?php $wp_query=new WP_Query();
              $param=array(
                'posts_per_page'=>'-1',//-1は全件表示
                'post_type'=>'foodmenu',//foodmenuの中から全件表示/postにすると普通の投稿が出る
                'cat'=>9//foodmenuのカテゴリID2を全件表示(IDはマウスオーバーでウィンドウの左下に表示)
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
