<?php
$subtitle = '<div id="sub_title">'.$_POST['sub_title'].'</div>'.PHP_EOL;
$date = '<div id="date">'.$_POST['date'].'</div>'.PHP_EOL;
$url = '<a href="'.$_POST['url'].'"target="_blank">바로가기</a>';
file_put_contents('data/'.$_POST['title'], $subtitle.$date.$url);
header('Location: /portfolio.php?id='.$_POST['title']);
?>