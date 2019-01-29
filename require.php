<?php
//クラス定義Humanを利用(require_onceは同じ名前のファイルの読み込みは一度きり、2度目以降は読み込まない)
//requireは何度も呼び出せる(呼び出した場所ごとに実行、変数の初期化などに利用できる)が、基本的にはrequire_onceを利用
require_once 'human.php';

//インスタンス生成
$man1 = new Human('山田太郎');
$man1->greet();

$girl1 = new Human("竜崎麗華");
$girl1->greet();

?>