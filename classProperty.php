<?php
class Human {
    //クラス自身が持つクラスプロパティ
    private static $counter = 0;
    //メンバー変数
    private $name;

    public function __construct($name) {
        //インスタンス生成時に与えられた引数を自身のメンバー変数にセット
        $this->name = $name;
        //各インスタンスではなく、クラス自身が持つクラスプロパティcounterのカウントアップ
        self::$counter++;
        echo (self::$counter."個目のインスタンスが生成されました。\n");
    }
    //ゲッター
    public function getName() {
        return $this->name;
    }
    //挨拶の振る舞いをするメソッド(関数)
    public function greet() {
        if ($this->name == "竜崎麗華") {
            echo "私は竜崎麗華。「お蝶夫人」でよくってよ。\n";
        } else {
        echo "こんにちは、私は".$this->getName()."です。\n";
        }
    }
}

//インスタンス生成
$man1 = new Human('山田太郎');
$man1->greet();
$girl1 = new Human("竜崎麗華");
$girl1->greet();
?>
