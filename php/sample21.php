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
    $post = '132-6543';
    $post = mb_convert_kana($post,'a','UTF-8');
    if(preg_match("/\A\d{3}[-]\d{4}\z/",$post)){
        print('郵便番号：〒'.$post);
    }else{
        print('※郵便番号を123-4567の形で入力してください');
    }


?>
</pre>
</main>
</body>    
</html>