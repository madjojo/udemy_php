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
<!-- ここにプログラムを記述します -->
<?php
require('dbconnect.php');

// $count = $db->exec('INSERT INTO my_items SET maker_id=1, item_name="桃", price=210, keyword="缶詰,ピンク,甘い"');
// echo $count."件のデータが挿入されました";
// $records = $db->query('SELECT * FROM my_items');
// while($record = $records->fetch()){
//     print($record['item_name']."\n");
// }
if(isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])){
    $page =  $_REQUEST['page'];
}else{
    $page = 1;
}
$start =  ($page-1)*5;

$memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?,5');
$memos->bindParam(1, $start, PDO::PARAM_INT);
$memos->execute();
?>

<article>
    <?php while($memo = $memos->fetch()) :?>
        <p><a href="memo.php?id=<?php print($memo['id'])?>"><?php print(mb_substr($memo['memo'], 0, 50));?></a></p>
        <time><?php print($memo['created_at']);?></time>
        <hr>
    <?php endwhile;?>

    <?php if($page >= 2) :?>
    <a href="index.php?page=<?php print($page-1);?>"><?php print($page-1);?>ページ目</a>|
    <?php endif;?>
    <?php 
    $counts = $db->query('SELECT COUNT(*) as cnt FROM memos'); 
    $count = $counts->fetch();
    $max_page = ceil($count['cnt']/5);
    if($page<$max_page):
    ?>
    <a href="index.php?page=<?php print($page+1);?>"><?php print($page+1);?>ページ目</a>
    <?php endif;?>
</article>
</main>
</body>    
</html>