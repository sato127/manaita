<?php
/*
Template Name: こだわり用テンプレート
*/ ?>
<?php get_header(2);?>

    <div class="container">
      <div class="inner">

        <?php if(have_posts()):
          while(have_posts()):
            the_post();
        ?>
        <?php the_content();?>
      <?php endwhile;?>
    <?php endif;?>
    
      </section>
      </div>

      <?php get_footer();?>
