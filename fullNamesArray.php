<?php

$firstName = ['ガウタマ', "マハトマ", 'アルボムッレ'];
$lastName = ["シッダールタ", "ガンディー", 'スマサナーラ'];
//空の配列宣言 「$fullNamesは(添字(0,1,2...)配列または連想配列の入る変数ですよ」の意味
$fullNames = array();   //$fullNames = []; でも同じ

for ($i = 0; $i < count($firstName); $i++) {
    $fullNames[$i] = fullName($firstName[$i], $lastName[$i]);
}

foreach ($fullNames as $fullName) {
    echo "ナマステ、${fullName}さん。\n";
}

//名前の結合メソッド
function fullName($firstName, $lastName) {
    $fullName = $firstName."・".$lastName;

    if ($firstName == "アルボムッレ" && $lastName == "スマサナーラ") {
        $fullName = $fullName."(シンハラ語:අලුබෝමුල්ලේ සුමනසාර)";
    } else if ($firstName == "マハトマ" && $lastName == "ガンディー") {
        $fullName = $fullName."(ヒンディー語:महात्मा गांधी)";
    }
    return $fullName;
}

?>