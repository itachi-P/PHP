<?php
//クラス定義Humanを利用
require_once 'human.php';

//配列の要素格納の記述は以下のどちらでも可能。変数側の[]不要
$numbers = [1, 2, 3, 4, 5];

//オブジェクト(プロパティ->値を持つ連想配列)を配列に格納
$humans = array(new Human('山田太郎'), new Human('竜崎麗華'));

//配列の要素数を数える関数count
echo "\n配列numbersの要素数は".count($numbers)."個\n";
//以下のように配列そのものを表示しようとするとエラー
//echo $numbers;
//配列の要素が無くなるまで1つづつ取り出して表示(for文より簡潔)
foreach ($numbers as $number) {
    echo $number." ";
}

//シングルクォートで囲んだ文字列は\nや変数が展開されずそのまま文字として表示されるので注意
echo '\n-----------$number------------\n';
//変数や特殊文字を結合する場合はダブルクォート ※変数名の後ろに英数字が続くとどこまで変数名か曖昧になるが${}で回避できる
echo "\n********** ${number}s ***********\n";


foreach ($humans as $human) {
    //下記も$human自体が文字列ではなくオブジェクト(連想配列)なのでやはりエラー
    //echo $human."\n";
    //特定のインスタンスのnameプロパティならechoで表示可能 ※特定の$humanではなく$humansとするとエラー
    echo $human->getName()."\n";
    //挨拶メソッド
    $human->greet();
}

?>
