<?php get_header(4);?>

    <div class="container">
      <div class="inner">
        <div class="column">
          <?php if(have_posts()):
            while(have_posts()):
              the_post();
          ?>
          <div class="column_title">
            <h4>タイトル：<?php the_title();?></h4>
            <p>投稿日：[<?php the_time('Y年m月d日');?>]</p>
          </div>
          <?php the_post_thumbnail('medium');?>
          <content>
            <?php the_content();?>
            <?php endwhile;?>
            <?php endif;?>
          </content>
        </div>
        <div class="back">
          <a href="<?php echo home_url("news");?>">新着情報一覧へ戻る>></a>
        </div>
      </div>
<?php get_footer();?>
