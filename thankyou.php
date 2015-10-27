<?php
 session_start();
 $name = $_SESSION ["name"];
 $title = $_SESSION ["title"];
 $mail = $_SESSION ["mail"];
 $body = $_SESSION ["body"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>サンキューページ</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>お問い合わせありがとうございます!</h1>
    <p>以下の内容で送信されました。</p>
    <ul>
    <li><span>お名前</span><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8") . '<br>' ?></li>
    <li><span>件名</span><?php echo htmlspecialchars($title, ENT_QUOTES, "UTF-8") . '<br>' ?></li>
	<li><span>メールアドレス</span><?php echo htmlspecialchars($mail, ENT_QUOTES, "UTF-8") . '<br>' ?></li>
	<li><span>本文</span><?php echo htmlspecialchars($body, ENT_QUOTES, "UTF-8"). '<br>' ?></li>
	<li><input type="button" value="戻る" onclick="location.href='index.php'"></li>
     </ul>
</body>
</html>