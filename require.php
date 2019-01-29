<?php
//クラス定義Humanを利用
require 'human.php';

//インスタンス生成
$man1 = new Human('山田太郎');
$man1->greet();

$girl1 = new Human("竜崎麗華");
$girl1->greet();

?>