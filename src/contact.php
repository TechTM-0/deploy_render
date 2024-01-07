<?php

// PHPMailerの名前空間を使用します
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] != 'POST') {

   $subject = '';
   $company = '';
   $name = '';
   $email = '';
   $tell = '';
   $mainmsg = '';
   $err_msg = '';
   $complete_msg = '';
} else {

   // フォームがサブミットされた場合（POST処理）
   // 入力された値を取得する
   $subject = ''; //今はnull
   $company = $_POST['your-company'];
   $name = $_POST['your-name']; //必須
   $email = $_POST['your-email']; //必須
   $tell = $_POST['your-tel'];
   $mainmsg = $_POST['your-message']; //必須

   // エラーメッセージ・完了メッセージの用意
   $err_msg = '';
   $complete_msg = '';

   // 必須項目が入力されていない
   if ($name == '' || $email == '' || $mainmsg == '') {
      $err_msg = '必須項目が入力されていません。入力して';
   }

   // エラーなし（必須項目が入力されている）
   if ($err_msg == '') {

      //外部ファイル(PHPMailer)を読み込む
      require 'vendor/autoload.php';
      $mail = new PHPMailer(true);

      try {
         // GmailのSMTPサーバーの設定
         $mail->SMTPDebug = 2;  // デバッグ出力を有効にする
         $mail->isSMTP();  // SMTPを使用する
         $mail->Host = 'smtp.gmail.com';  // GmailのSMTPサーバーを指定
         $mail->SMTPAuth = true;  // SMTP認証を有効にする
         $mail->Username = '0zerbeam@gmail.com';  // Gmailのユーザー名
         $mail->Password = 'jvxk vvvp mfzy byiy';  // Gmailのパスワード
         $mail->SMTPSecure = 'tls';  // TLS暗号化を有効にする
         $mail->Port = 587;  // TCPポートを指定

         // メールの内容を設定
         $mail->setFrom('0zerbeam@gmail.com', 'ContactForm');  // 送信元のメールアドレスと名前
         $mail->addAddress('0zerbeam@gmail.com', 'TORU');  // 送信先のメールアドレスと名前
         $mail->Subject = 'From Portfolio ContactForm';  // メールの件名
         $mail->Body    = $name;  // メールの本文

         $mail->send(); //送信
         echo 'Message has been sent';
         $complete_msg = 'メールは正常に送信されました。';
      } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }

      // 全てクリア
      $subject = '';
      $company = '';
      $name = '';
      $email = '';
      $tell = '';
      $mainmsg = '';
   }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/website#">
   <meta charset="utf-8" />

   <title>TECHTM 北海道でRPA・VBA・Pythonを使用した業務自動化ツールを作成しています</title>
   <link rel="alternate" type="application/rss+xml" title="RSS FEED" href="index.html/feed" />

   <meta property="og:image" content="img/index.jpg" />
   <link rel="stylesheet" type="text/css" media="all" href="css/reset.css">
   <link rel="stylesheet" type="text/css" media="all" href="css/common.css">
   <link rel="stylesheet" type="text/css" media="all" href="css/contact.css">
   <link href='https://fonts.googleapis.com/css?family=Lato:100,700,400' rel='stylesheet' type='text/css'>

   <script src="js/picturefill.js"></script>

   <link rel="icon" href="">

   <link rel="alternate" type="application/rss+xml" title="TECHTM » Contact のコメントのフィード" href="contact.php/feed" />


   <meta property="og:type" content="article" />
   <meta property="og:url" content="contact.php" />

   <!-- Google Tag Manager -->
   <script>
      (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-K2MF784');
   </script>
   <!-- End Google Tag Manager -->
</head>

<body id="contact">

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K2MF784" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->

   <!-- header -->
   <header id="inner">
      <!--<h1>TECHTM</h1>-->
      <h1><a href="/">TECHTM</a></h1>
      <nav>
         <ul class="cf">
            <li class="about"><a href="about.html">About</a></li>
            <li class="works"><a href="works.html">Works</a></li>
            <li class="contact"><a href="contact.php">Contact</a></li>
         </ul>
      </nav>

      <!--ソーシャルiCON-->
      <ul class="socialBtn">
         <li>
            <a href="https://twitter.com/TechTM0621" class="close-icon">
               <svg viewBox="0 0 24 24" width="24" height="24" preserveAspectRatio="xMidYMid meet">
                  <g>
                     <path d="M14.258 10.152L23.176 0h-2.113l-7.747 8.813L7.133 0H0l9.352 13.328L0 23.973h2.113l8.176-9.309 6.531 9.309h7.133zm-2.895 3.293l-.949-1.328L2.875 1.56h3.246l6.086 8.523.945 1.328 7.91 11.078h-3.246zm0 0" fill="#FFF" />
                  </g>
               </svg>
            </a>
         </li>
      </ul>
   </header>

   <!-- main -->
   <div id="main" class="inner">

      <!-- about -->
      <section class="contBox cf">
         <h2 class="ttl large">Contact</h2>
         <p class="txtBox">制作の依頼・ご相談などお気軽にお問い合わせくださいませ。<br>下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。</p>
         <!--<div role="form" class="wpcf7" id="wpcf7-f147-p8-o1" lang="ja" dir="ltr">-->
         <form action="" method="post">

            <!--err_msg-->
            <?php if ($err_msg != '') : ?>
               <div class="alert-danger">
                  <?php echo $err_msg; ?>
               </div>
            <?php endif; ?>

            <?php if ($complete_msg != '') : ?>
               <div class="alert-success">
                  <?php echo $complete_msg; ?>
               </div>
            <?php endif; ?>

            <dl class="contactForm">
               <dt>貴社名</dt>
               <dd class="w01"><span class="wpcf7-form-control-wrap your-company"><input type="text" name="your-company" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span></dd>
               <dt>お名前<span class="required">必須</span></dt>
               <dd class="w01"><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span></dd>
               <dt>メールアドレス<span class="required">必須</span></dt>
               <dd class="w01"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span></dd>
               <dt>電話番号</dt>
               <dd class="w01"><span class="wpcf7-form-control-wrap your-tel"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" /></span></dd>
               <dt>お問い合わせ内容<span class="required">必須</span></dt>
               <dd class="w02"><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span></dd>
            </dl>

            <div class="wpcf7-form-control-wrap">
               <div data-sitekey="6Let6GAUAAAAALgf36ff7P-4wUN_unD2fQxkQukv" class="wpcf7-form-control g-recaptcha wpcf7-recaptcha"></div>
               <noscript>
                  <div style="width: 302px; height: 422px;">
                     <div style="width: 302px; height: 422px; position: relative;">
                        <div style="width: 302px; height: 422px; position: absolute;">
                           <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Let6GAUAAAAALgf36ff7P-4wUN_unD2fQxkQukv" frameborder="0" scrolling="no" style="width: 302px; height:422px; border-style: none;">
                           </iframe>
                        </div>
                        <div style="width: 300px; height: 60px; border-style: none; bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                           <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;"></textarea>
                        </div>
                     </div>
                  </div>
               </noscript>
            </div>

            <p> <input type="submit" value="内容を送信する" class="wpcf7-form-control submitBtn" /></p>

         </form>
   </div>
   </section>

   <!-- toTop -->
   <p class="toTop"><a href="#top"><img src="img/icon_totop.gif" alt="" width="22" height="14"></a></p>

   </div>

   <!-- footer -->
   <footer class="cf">
      <nav class="footer">
         <ul class="cf">
            <li class="about"><a href="about.html">About</a></li>
            <li class="works"><a href="works.html">Works</a></li>
            <li class="contact"><a href="contact.php">Contact</a></li>
         </ul>
      </nav>

      <p id="copyright"><small>&#169; TECHTM All rights reserved.</small></p>

   </footer>

</body>

</html>