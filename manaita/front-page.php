<?php get_header();?>
    <!--    container    -->
    <div class="container">
      <!--main-->
      <section id="vegas" style="height:100vh"><!--position:relative-->
        <div class="logo">
          <img src="<?php echo get_template_directory_uri();?>/image/logo.png" alt="真魚板ロゴ"><!--absolute-->
        </div>
          <a href="<?php echo home_url("contact");?>" class="reserved" target="_blank"><!--absolute-->
            <ul>
              <li>ご予約はこちら</li>
              <li><i class="fas fa-external-link-alt"></i></li>
            </ul>
          </a>
        <nav>
          <ul>
            <li><a href="<?php echo home_url();?>">TOP</a></li>
            <li><a href="<?php echo home_url("picky");?>">私達のこだわり</a></li>
            <li><a href="<?php echo home_url("food");?>">フードメニュー</a></li>
            <li><a href="<?php echo home_url("drink");?>">ドリンクメニュー</a></li>
          </ul>
        </nav>
      </section>
      <div class="fadein">
      <section id="about">
        <div class="about_text">
          <h2>遊食ダイニング 真魚板 仙台店</h2>
          <p>当店は「地産地消」を合言葉に、宮城の食材、特に魚介類に特化したダイニング居酒屋としてオープンしました。オーナーの生まれ育った宮城県の食材を活かすべく、
            生産者や仲卸との繋がりを大切にしており、松島産の牡蠣や石巻漁港からの新鮮な魚の他、牛タンや仙台曲がり葱、セリなどを余すことなく使用した創作料理を提供し
            ています。 おひとりさまでもくつろげるカウンター席、少人数でご利用頂けるひろびろとした個室、20名まで対応可能な大人数用の掘りごたつ席も完備しています。
            仲間との宴会や大切な人とのお食事、記念日のパーティーなど、乾杯はぜひ 遊食ダイニング 真魚板 仙台店で。</p>
        </div>
      </section>
      </div>
      <div class="fadein">
      <section id="news">
        <div class="flex">
          <div class="news_title">
            <h2>NEWS</h2>
            <a class="nomal" href="<?php echo home_url("news");?>"></i>新着情報一覧　＞</a>
          </div>
          <dl class="contents">
            <?php $wp_query=new WP_Query();
            $param=array(
              'posts_per_page'=>'4',//-1は全件表示
              'post_type'=>'post',//postにすると普通の投稿が出る
            );
            $wp_query->query($param);

            if($wp_query->have_posts()):
              while($wp_query->have_posts()):
                $wp_query->the_post();
            ?>
              <dt><?php the_time('Y年m月d日');?></dt>
              <dd><a href="<?php the_permalink();?>"><?php the_title();?></a></dd>
            <?php endwhile;?>
            <?php endif;?>
          </dl>
        <a class="responsive" href="<?php echo home_url("news");?>">新着情報一覧　＞</a>
        </div>
      </section>
      </div>
      <div class="fadein">
      <section id="acsess">
        <div class="acsess_title">
          <h2>交通のご案内</h2>
        </div>
        <div class="ggmap">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3133.0440110941768!2d140.87318756482463!3d38.255285292141856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a28143a4d2fd9%3A0xbfde7f48569b24d8!2z44CSOTgwLTAwMjMg5a6u5Z-O55yM5LuZ5Y-w5biC6Z2S6JGJ5Yy65YyX55uu55S677yT!5e0!3m2!1sja!2sjp!4v1551614221405" width="600" height="450" frameborder="0" style="border:0"allowfullscreen></iframe>
        </div>
        <div class="acsess_text">
          <ul>
            <li>宮城県仙台市青葉区北目町3-2</li>
            <li>○○○-○○○-○○○○</li>
            <li><a href="<?php echo home_url("contact");?>" target="_blank">ご予約はこちらから</a></li>
          </ul>
          <p>JR仙台駅西口を出て左側(PARCO2、イービーンズのある方)へ進みます。そのまま奥州街道を直進し、<br>
            JR東日本仙台支社ビルがある十字路を右折してください。そのまま5分ほど直進すると当店の看板が出ております。</p>
        </div>
      </section>
      </div>
<?php get_footer();?>
