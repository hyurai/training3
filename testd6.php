function randnummber($nummber1,$nummber2){
        //randnummberという処理を定義し、$nummber1,$nummber2を引数とする
        return rand($nummber1,$nummber2);
        //$nummber1から$nummber2の中からランダムな数字を一つ戻り値とする
        }
    
    $CalculationResult = randnummber(1,10) * randnummber(1,10);
    //$CalculationResultという配列に1から10までのランダムな数字を累乗にして代入する
    echo $CalculationResult
    //$CalculationResultという配列を表示する
    
    ?>}