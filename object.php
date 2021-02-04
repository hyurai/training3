<?php 
//課題番号8
class Human{
    public $muscle;
    private $hair;
    //アクセス拡張子publicはどこでも呼び出すことはできる。pubicをprivateでやってしまったらエラーが起きる
    public function __construct(){
        $this->hair = '長い';
        echo '私は髪は'.$this->hair.'です';
    //privateではクラス内でしかアクセスすることができない。
    }
    public function short(){
        $this->hair = "短い";
        echo '私の髪は'.$this->hair.'です';
    }
    }
echo Human::short();

$male = new Human();
//$maleにHumanクラスのインスタンスを代入する
$male -> muscle = 'High';

echo $male -> muscle;



?> 