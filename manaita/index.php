<!-- 投稿用固定ページ -->
<?php
/*
Template Name: ニュース一覧用テンプレート
*/ ?>
<?php get_header(4);?>
    <!--    container    -->
    <div class="container">
      <div class="inner">
      <div class="column">

        <?php
        query_posts('post_type=post&showposts=8&paged='.$paged);
        if(have_posts()):
          while(have_posts()):
            the_post();
        ?>
        <article class="column_area">
          <p><a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a></p>
          <div class="head">
            <h4><a href="<?php the_permalink();?>">タイトル：<?php the_title();?></a></h4>
            <p><?php the_excerpt();?></p>
            <p>投稿日：[<?php the_time('Y年m月d日');?>]</p>
        </article>
            <?php endwhile;?>
            <?php endif;?>
          </div>
          <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}?>
          <?php wp_reset_query();?>
      </div>
<?php get_footer();?>
