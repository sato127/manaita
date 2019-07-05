<?php
/*
Template Name: メールフォーム用テンプレート
*/ ?>
<?php get_header(3);?>
    <div class="container">
      <div class="inner">

        <?php if(have_posts()):
          while(have_posts()):
            the_post();
        ?>
        <?php the_content();?>
      <?php endwhile;?>
    <?php endif;?>

        <?php
        $header = null;
        $auto_reply_subject = null;
        $auto_reply_text = null;
        $admin_reply_subject = null;
        $admin_reply_text = null;
        date_default_timezone_set('Asia/Tokyo');

        // ヘッダー情報を設定
        $header = "MIME-Version: 1.0\n";
        $header .= "From: 遊食ダイニング 真魚板 <d09028491784@gmail.com>\n";
        $header .= "Reply-To: 遊食ダイニング 真魚板 <d09028491784@gmail.com>\n";

        // 件名を設定
        $auto_reply_subject = '予約お申込みありがとうございます。';

        // 本文を設定
        $auto_reply_text = "この度は、予約お申込み頂き誠にありがとうございます。
        お問い合わせ内容につきまして、2営業日以内にメール、もしくはお電話にてご連絡を差し上げます。担当者からの連絡をお待ちください。\n\n
        下記の内容でお問い合わせを受け付けました。\n";
        $auto_reply_text .= "===============================" . "\n\n";
        $auto_reply_text .= "お名前：" . $_POST['last_name'] . $_POST['first_name'] . "\n\n";
        $auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
        $auto_reply_text .= "電話番号：" . $_POST['tel']  . "\n\n";
        $auto_reply_text .= "お問い合わせ内容：" . $_POST['message'] . "\n\n";
        $auto_reply_text .= "===============================" . "\n\n";
        $auto_reply_text .= "遊食ダイニング 真魚板";

        // メール送信
        mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);

        $admin_reply_subject = "予約のお申込みを受け付けました";

        // 本文を設定
        $admin_reply_text = "下記の内容で予約のお申込みを受け付けました。\n\n";
        $admin_reply_text .= "====================================" . "\n\n";
        $admin_reply_text .= "お名前：" . $_POST['last_name'] . $_POST['first_name'] . "\n\n";
        $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
        $admin_reply_text .= "電話番号：" . $_POST['tel']  . "\n\n";
        $admin_reply_text .= "お問い合わせ内容：" . $_POST['message'] . "\n\n";
        $admin_reply_text .= "=====================================" . "\n\n";

        // 運営側へメール送信
        mb_send_mail( 'd09028491784@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
        ?>
        </section>
      </div>

      <?php get_footer();?>
