<?php
function beforeTrapezoid($theTopSide,$theBottomSide,$height){
    //beforeTrapezoidを定義し、引数をとる
    return ($theTopSide + $theBottomSide) * $height / 2;
    //これらの計算式を戻り値とする
    }

$afterTrapezoid = beforeTrapezoid(5,4,3);
//引数を5 4 3とした戻り値の値を$afterTrapezoidに代入する

echo $afterTrapezoid;
//$afterTrapezoidという配列を表示する
?> 