<?php 
class Human{
    public $muscle;
    //アクセス拡張子publicはどこでも呼び出すことはできる。pubicをprivateでやってしまったらエラーが起きる
    }
//クラスを設計する
$male = new Human();
//$maleにHumanクラスのインスタンスを代入する
$male -> muscle = 'High';

echo $male -> muscle;

?> 