<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

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
お名前：
<?php
    // if(isset($_GET['my_name'])){
    //     $my_name = $_GET['my_name'];
    //     echo $my_name ;
    // }
    print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES));
?>
</pre>
</main>
</body>    
</html>