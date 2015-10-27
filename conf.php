<?php
   session_start();
//セッションのデータを表示用変数に格納
   $view_name = $_SESSION ["name"];
   $view_title = $_SESSION["title"];
   $view_mail = $_SESSION["mail"];
   $view_body = $_SESSION["body"];

   ini_set("mbstring.internal_encoding","UTF-8");
   mb_language("uni");
   $to = "ai@resvo-inc.com";
   $title = $_SESSION["title"];
   $body = $_SESSION["body"];
   $from = $_SESSION ["name"];

   mb_send_mail($to, $title, $body, $from);
  // date_default_timezone_set('Asia/Tokyo');
  // echo date("Y/m/d H:i:s") . "\n";
//ここに後にファイルへの書き込み処理を追加
/*
print<<<EOF
   <html>
   <title>掲示板投稿確認</title>
   <body>
   この内容で書き込みます。<br><br>
   名前：{$view_name}<br>
   タイトル：{$view_title}<br>
   内容：{$view_body}<br>
   <form action="conf.php" method="post">
   <input type="submit" name="set" value="確定"> <input type="button" value="戻る" onclick="location.href='bbs.php'">
   </form>
   </body>
   </html>
EOF;
?> */
?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>内容確認</title>
<link rel="stylesheet" href="style.css">
</head>

   <body>
   <h2>この内容で書き込みますか？</h2><br><br>
   <form action="thankyou.php" method="post">
   <ul>
   <li><span>名前</span><?php echo htmlspecialchars($view_name, ENT_QUOTES, "UTF-8").'<br>' ?></li>  
   <li><span>タイトル</span><?php echo htmlspecialchars($view_title, ENT_QUOTES,"UTF-8") .'<br>' ?></li>
   <li><span>メールアドレス</span><?php echo htmlspecialchars($view_mail, ENT_QUOTES,"UTF-8") . '<br>' ?></li>
   <li><span>内容</span><?php echo htmlspecialchars($view_body, ENT_QUOTES,"UTF-8") . '<br>' ?></li>
   <li><input type="submit" name="set" value="確定"></li>
   <li><input type="button" value="戻る" onclick="location.href='index.php'"></li>
   <li><input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>"></li>
   <li><input type="hidden" name="title" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>"></li>
   <li>
   <p>
   <input type="hidden" name="mail" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>">
   <input type="hidden" name="body" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>">
   </p>
   </li>
   </ul>
   </form>
   </body>