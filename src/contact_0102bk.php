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
   <!--
   <meta name="description" content="大阪でフリーランスのWeb制作を行っているUNDERLINEです。デザイン、コーディング、CMSを使った更新性の高いサイトをメインに、クライアントの目線で心に残るようなものを制作していければと考えています。">
   <meta name="keywords" content="UNDERLINE,アンダーライン,Web制作,大阪,Webデザイン,デザイン,Webサイト,ホームページ,HP,Webデザイナー,デザイナー,HTMLコーディング,CSSコーディング,スマホサイト">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no,">
   <meta name="format-detection" content="telephone=no">
-->
   <title>TECHTM 北海道でRPA・VBA・Pythonを使用した業務自動化ツールを作成しています</title>
   <link rel="alternate" type="application/rss+xml" title="RSS FEED" href="index.html/feed" />
  
   <meta property="og:image" content="img/index.jpg" />
   <link rel="stylesheet" type="text/css" media="all" href="css/reset.css">
   <link rel="stylesheet" type="text/css" media="all" href="css/common.css">
   <link rel="stylesheet" type="text/css" media="all" href="css/contact.css">
   <link href='https://fonts.googleapis.com/css?family=Lato:100,700,400' rel='stylesheet' type='text/css'>
   <!--
   <script src="https://u-d-l.jp/wp-content/themes/underline/js/jquery.js"></script>
   <script src="https://u-d-l.jp/wp-content/themes/underline/js/common.js"></script>
   <script src="https://u-d-l.jp/wp-content/themes/underline/js/page-scroller.js"></script>
   <script src="https://u-d-l.jp/wp-content/themes/underline/js/matchmedia.js"></script>
-->
   <script src="js/picturefill.js"></script>
   <!--[if lt IE 9]>
	<script src="https://u-d-l.jp/wp-content/themes/underline/js/html5shiv.js"></script>
	<![endif]-->
   <!--[if lt IE 9]>
	<script src="https://u-d-l.jp/wp-content/themes/underline/js/css3-mediaqueries.js"></script>
	<![endif]-->
   <link rel="icon" href="">
   
   <link rel="alternate" type="application/rss+xml" title="TECHTM &raquo; Contact のコメントのフィード" href="contact.php/feed" />
   <!--
   <script type="text/javascript">
      
      window._wpemojiSettings = {
         "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
         "ext": ".png",
         "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
         "svgExt": ".svg",
         "source": {
            "concatemoji": "https:\/\/u-d-l.jp\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.24"
         }
      };
      
      ! function(e, a, t) {
         var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

         function s(e, t) {
            var a = String.fromCharCode;
            p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
            e = i.toDataURL();
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
         }

         function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
         }
         for (o = Array("flag", "emoji"), t.supports = {
               everything: !0,
               everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (!p || !p.fillText) return !1;
            switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
               case "flag":
                  return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
               case "emoji":
                  return !s([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039])
            }
            return !1
         }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
         t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
            t.DOMReady = !0
         }, t.supports.everything || (n = function() {
            t.readyCallback()
         }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
            "complete" === a.readyState && t.readyCallback()
         })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
      }(window, document, window._wpemojiSettings);
   </script>
   -->
   <style type="text/css">
      img.wp-smiley,
      img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
      }
   </style>
   <!--
   <link rel='stylesheet' id='contact-form-7-css' href='https://u-d-l.jp/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.2' type='text/css' media='all' />
   <script type='text/javascript' src='https://u-d-l.jp/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
   <script type='text/javascript' src='https://u-d-l.jp/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
   <link rel='https://api.w.org/' href='https://u-d-l.jp/wp-json/' />
   -->

   <!--
   <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://u-d-l.jp/xmlrpc.php?rsd" />
   <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://u-d-l.jp/wp-includes/wlwmanifest.xml" />
   <meta name="generator" content="WordPress 4.9.24" />
   <link rel="canonical" href="https://u-d-l.jp/contact/" />
   <link rel='shortlink' href='https://u-d-l.jp/?p=8' />
   <link rel="alternate" type="application/json+oembed" href="https://u-d-l.jp/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fu-d-l.jp%2Fcontact%2F" />
   <link rel="alternate" type="text/xml+oembed" href="https://u-d-l.jp/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fu-d-l.jp%2Fcontact%2F&#038;format=xml" />
   -->
   <meta property="og:title" content="Contact" />
   <meta property="og:site_name" content="TECHTM" />
   <!--<meta property="og:description" content="[contact-form-7 id=&quot;82&quot; title=&quot;お問い合わせフォーム&quot;]" />-->
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
      <h1><a href="index.html">TECHTM</a></h1>
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

            <!--<div class="screen-reader-response"></div>-->
            <form action="/contact/#wpcf7-f147-p8-o1" method="post" class="wpcf7-form" novalidate="novalidate">
               <div style="display: none;">
                  <input type="hidden" name="_wpcf7" value="147" />
                  <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                  <input type="hidden" name="_wpcf7_locale" value="ja" />
                  <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f147-p8-o1" />
                  <input type="hidden" name="_wpcf7_container_post" value="8" />
               </div>
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
               <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
         </form>
   </div>
   </section>

   <!-- toTop -->
   <p class="toTop"><a href="#top"><img src="https://u-d-l.jp/wp-content/themes/underline/common/icon_totop.gif" alt="" width="22" height="14"></a></p>

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

      <p id="copyright"><small>&#169; UNDERLINE All rights reserved.</small></p>

   </footer>

   <script type="text/javascript">
      var recaptchaWidgets = [];
      var recaptchaCallback = function() {
         var forms = document.getElementsByTagName('form');
         var pattern = /(^|\s)g-recaptcha(\s|$)/;

         for (var i = 0; i < forms.length; i++) {
            var divs = forms[i].getElementsByTagName('div');

            for (var j = 0; j < divs.length; j++) {
               var sitekey = divs[j].getAttribute('data-sitekey');

               if (divs[j].className && divs[j].className.match(pattern) && sitekey) {
                  var params = {
                     'sitekey': sitekey,
                     'type': divs[j].getAttribute('data-type'),
                     'size': divs[j].getAttribute('data-size'),
                     'theme': divs[j].getAttribute('data-theme'),
                     'badge': divs[j].getAttribute('data-badge'),
                     'tabindex': divs[j].getAttribute('data-tabindex')
                  };

                  var callback = divs[j].getAttribute('data-callback');

                  if (callback && 'function' == typeof window[callback]) {
                     params['callback'] = window[callback];
                  }

                  var expired_callback = divs[j].getAttribute('data-expired-callback');

                  if (expired_callback && 'function' == typeof window[expired_callback]) {
                     params['expired-callback'] = window[expired_callback];
                  }

                  var widget_id = grecaptcha.render(divs[j], params);
                  recaptchaWidgets.push(widget_id);
                  break;
               }
            }
         }
      };

      document.addEventListener('wpcf7submit', function(event) {
         switch (event.detail.status) {
            case 'spam':
            case 'mail_sent':
            case 'mail_failed':
               for (var i = 0; i < recaptchaWidgets.length; i++) {
                  grecaptcha.reset(recaptchaWidgets[i]);
               }
         }
      }, false);
   </script>
   <script type='text/javascript'>
      /* <![CDATA[ */
      var wpcf7 = {
         "apiSettings": {
            "root": "https:\/\/u-d-l.jp\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
         },
         "recaptcha": {
            "messages": {
               "empty": "\u3042\u306a\u305f\u304c\u30ed\u30dc\u30c3\u30c8\u3067\u306f\u306a\u3044\u3053\u3068\u3092\u8a3c\u660e\u3057\u3066\u304f\u3060\u3055\u3044\u3002"
            }
         }
      };
      /* ]]> */
   </script>
   <script type='text/javascript' src='https://u-d-l.jp/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.2'></script>
   <script type='text/javascript' src='https://u-d-l.jp/wp-includes/js/wp-embed.min.js?ver=4.9.24'></script>
   <script type='text/javascript' src='https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&#038;render=explicit&#038;ver=2.0'></script>
</body>

</html>