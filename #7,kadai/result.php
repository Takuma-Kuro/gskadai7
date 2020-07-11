<?php
//1.  DB接続します


try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= "<td>";
    $view .= $result['id'];
    $view .= "</td>";
  }

}


try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view2="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error2 = $stmt->errorInfo();
  exit("ErrorQuery:".$error2[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result2 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view2 .= "<td>";
    $view2 .= $result2['indate'];
    $view2 .= "</td>";
  }

}


try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view3="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error3 = $stmt->errorInfo();
  exit("ErrorQuery:".$error3[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result3 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view3 .= "<td>";
    $view3 .= $result3['title'];
    $view3 .= "</td>";
  }

}

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view4="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error4 = $stmt->errorInfo();
  exit("ErrorQuery:".$error4[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result4 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view4 .= "<td>";
    $view4 .= $result4['store'];
    $view4 .= "</td>";
  }

}

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view5="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error5 = $stmt->errorInfo();
  exit("ErrorQuery:".$error5[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result5 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view5 .= "<td>";
    $view5 .= $result5['volume'];
    $view5 .= "</td>";
  }

}

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view6="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error6 = $stmt->errorInfo();
  exit("ErrorQuery:".$error6[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result6 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view6 .= "<td>";
    $view6 .= $result6['series'];
    $view6 .= "</td>";
  }

}

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view7="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error7 = $stmt->errorInfo();
  exit("ErrorQuery:".$error7[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result7 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view7 .= "<td>";
    $view7 .= $result7['name'];
    $view7 .= "</td>";
  }

}

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view8="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error8 = $stmt->errorInfo();
  exit("ErrorQuery:".$error8[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result8 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view8 .= "<td>";
    $view8 .= $result8['date'];
    $view8 .= "</td>";
  }

}

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view9="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error9 = $stmt->errorInfo();
  exit("ErrorQuery:".$error9[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result9 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view9 .= "<td>";
    $view9 .= $result9['uri'];
    $view9 .= "</td>";
  }

}

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_kadai_table ORDER BY id DESC ");
$status = $stmt->execute();

$view10="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error10 = $stmt->errorInfo();
  exit("ErrorQuery:".$error10[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result10 = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view10 .= "<td>";
    $view10 .= $result10['text'];
    $view10 .= "</td>";
  }

}



?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブックマーク一覧</title>
<link rel="stylesheet" href="css/stylecss.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body id="main">
<!-- Head[Start] -->
<header id="header2">
  ブックマーク一覧
</header>
<div>
<button id="kensaku" >検索に戻る</button>
</div>
<!-- Head[End] -->

<!-- Main[Start] -->
<table>


<tr class="idbango">
  <th>ID番号</th><?= $view ?>
</tr>
<tr class="torokubango">
  <th>登録時間</th><?= $view2 ?>
</tr>
<tr class="syosekimei">
  <th>書籍名</th><?= $view3 ?>
</tr>
<tr class="syuppansya">
  <th>出版社</th><?= $view4 ?>
</tr>
<tr class="kan">
  <th>巻</th><?= $view5 ?>
</tr>
<tr class="sirizu">
  <th>シリーズ</th><?= $view6 ?>
</tr>
<tr class="tyosya">
  <th>著者</th><?= $view7 ?>
</tr>
<tr class="syuppanbi">
  <th>出版日</th><?= $view8 ?>
</tr>
<tr class="url">
  <th>サムネURL</th><?= $view9 ?>
</tr>
<tr class="syosai">
  <th>詳細</th><?= $view10 ?>
</tr>



<!-- <tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr>
<tr>

</tr> -->








</table>

<script>
$("#kensaku").click(function() {
  if (confirm('検索ページに遷移しますか')) {
    window.location.href = "index.php";
  }
  });
</script>

</body>
</html>
