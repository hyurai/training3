<?php 

$numbers = array(19,20,21,null);
//配列に数字を代入するtest
echo $numbers[0];
//$nummbersという配列の0番目の要素を出力する
$numbers[] = 22;
//$nummbersという配列に新しい要素を最後の要素に代入する
echo $numbers[4];
//$nummbersに新しく代入した要素を出力する
$numbers[0] = 1;
//$numbersという配列の0番目の要素を1に上書きする
echo $nummers[0];
//$nummbersという配列の上書きした0番目の要素を出力する

if ($numbers[3] == null){
    //$numbersという配列の三番目の要素がnullの場合の条件分岐
  echo '$nummersの3番目の要素には数字が入っていません';
  //$nummbersという配列の三番目の要素がnullの場合出力される
  }else{
  echo '$nummersの3番目の要素には数字が入っています';
  //$nummbersという配列の三番目の要素がnullではない場合出力されます
}

$string = array('macOS','Windows','Linux');
//文字列型

echo $string[0];




?> 