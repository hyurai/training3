<?php

//?とphpの間は開けてはだめ
function randnumber($number1,$number2){
    //randnummberという処理を定義し、$nummber1,$nummber2を引数とする
    return rand($number1,$number2);
    return rand($number1,$number2);
    //$nummber1から$nummber2の中からランダムな数字を一つ戻り値とする
    }

$CalculationResult = randnumber(1,10) * randnumber(1,10);
$CalculationResult = randnumber(1,10) * randnumber(1,10);
//$CalculationResultという配列に1から10までのランダムな数字を累乗にして代入する
echo $CalculationResult
//$CalculationResultという配列を表示する


?>