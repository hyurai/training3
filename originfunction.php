<?php


function beforeTrapezoid($Top = 10,$Bottom = 20,$height = 5){
    //beforeTrapezoidを定義し、引数をとる
    return ($Top + $Bottom) * $height / 2;
    //これらの計算式を戻り値とする
    }

$afterTrapezoid = beforeTrapezoid();
//引数を5 4 3とした戻り値の値を$afterTrapezoidに代入する

echo $afterTrapezoid;
//$afterTrapezoidという配列を表示する
?> 