<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
$success = file_put_contents('../../news_data/news.txt','2018-06-01 ホームページリニューアルしました');
if($success){
    print('ファイル書き込み完了しました。');
}else{
    print('ファイル書き込み失敗しました。フォルダの権限を確認してください');
}
?>
</pre>
</main>
</body>    
</html>