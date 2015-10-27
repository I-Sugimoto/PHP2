<?php
//投稿ボタンが押されたら
if (isset($_POST["register"])){
    session_start();
    //エラーメッセージを格納する配列を作成
    $error_message = array();
   //各データがセットされていたら各変数にPOSTのデータを格納
    if ($_POST["name"] !== ""){
       $_SESSION["name"] = htmlspecialchars($_POST["name"],ENT_QUOTES);
   //各データがなかったらエラーメッセージを配列に格納
    }else{
       $error_message[] = "お名前を入力してください。";
    }
    if ($_POST["title"] !== ""){
      $_SESSION["title"] = htmlspecialchars($_POST["title"],ENT_QUOTES);
    }else{
       $error_message[] = "件名を入力してください。";
    }
    if ($_POST["mail"] !== ""){
        $_SESSION["mail"] = htmlspecialchars($_POST["mail"],ENT_QUOTES);
    }else{
       $error_message[] = "メールアドレスを入力してください。";
    }
    if ($_POST["body"] !== ""){
       $_SESSION["body"] = htmlspecialchars($_POST["body"],ENT_QUOTES);
    }else{
       $error_message[] = "本文を入力してください。";
    }
     //エラーがない時
    if (!count($error_message)){
        //確認ページへ
        header ("Location:conf.php");
       exit;
    }
  //エラーがある時
  if (count($error_message)){
     foreach ($error_message as $message){
         print "<span style='color:red'>" . $message . '</span><br>';
     }
  print "<hr color='red'>";
  }
}
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>書き込みフォーム</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>書き込みフォーム</h1><br>
<form action="index.php" method="post">
<ul>
<li><span>お名前</span><input type="text" name="name" value=""><br></li>
<li><span>件名</span><input type="text" name="title"><br></li>
<li><span>メールアドレス</span><input type="text" name="mail"><br></li>
<li><span>本文</span><input type="text" name="body" size="50"></li>
<li><input type="submit"name="register"  value="投稿"></li>
</ul>
</body>
</html>