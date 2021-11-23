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
// JSON - JavaScript Object Notation
// -短く書ける
// {
//     "id": "https://h2o-space.com/?p=3164",
//     "url": "https://h2o-space.com/blog/shift/",
//     "title": "",
//     "content_html": "",
//     "content_text": "",
//     "date_published": "2021-01-19T12:33:22+09:00",
//     "date_modified": "2021-01-19T12:33:26+09:00",
//     "authors": [
//         {
//             "name": "Sumiyo MAKINO",
//         }
//     ],
//- 各データの内容がわかる
$file = file_get_contents('https://h2o-space.com/feed/json/');
$json = json_decode($file);
// var_dump($json->home_page_url);
foreach( $json->items as $item):?>
・<a href="<?php print($item->url);?>"><?php print($item->title);?></a>
<?php endforeach;?>
</pre>
</main>
</body>    
</html>