<?php
//クラス定義Humanを利用
require_once 'human.php';

//配列の宣言と格納は以下のどちらでも可能。変数側に[]やArray等を付けない
$numbers = [1, 2, 3];
//オブジェクト(プロパティ->値を持つ連想配列)を配列に格納
$humans = array(new Human('山田太郎'), new Human('竜崎麗華'));

//以下のように配列そのものを表示しようとするとエラー
//echo $numbers;
//配列の要素が無くなるまで1つづつ取り出して表示(for文より簡潔)
foreach ($numbers as $number) {
    echo $number." ";
}

echo "\n************************\n";
//シングルクォートで囲んだ文字列は\nがそのまま文字として表示され、改行されないので注意
echo '\n------------------------\n';

foreach ($humans as $human) {
    //下記も$human自体が文字列ではなくオブジェクト(連想配列)なのでやはりエラー
    //echo $human."\n";
    //特定のインスタンスのnameプロパティならechoで表示可能 ※特定の$humanではなく$humansとするとエラー
    echo $human->getName()."\n";
}

?>
