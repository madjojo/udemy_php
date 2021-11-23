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
try{
    require('dbconnect.php');


    $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
    $statement->bindParam(1,$_POST['memo']);
    $statement->execute();
    // $statement->execute(array($_POST['memo']));
    echo 'メッセージが登録されました';
    // $db->exec('INSERT INTO memos SET memo="'. $_POST['memo'] .'", created_at=NOW()');
}
catch(PDOException $e){
    echo 'DB継続エラー:'.$e->getMessage();
}


?>
</pre>
</main>
</body>    
</html>