<?php
  $nummers = array(19,20,21,null);
  //配列に数字を代入するtest
  echo $nummers[0];
  //$nummbersという配列の0番目の要素を出力する
  $nummers[] = 22;
  //$nummbersという配列に新しい要素を最後の要素に代入する
  echo $nummers[4];
  //$nummbersに新しく代入した要素を出力する
  $nummbers[0] = 1;
  //$numbersという配列の0番目の要素を1に上書きする
  echo $nummers[0];
  //$nummbersという配列の上書きした0番目の要素を出力する

  if ($nummers[3] == null){
      //$numbersという配列の三番目の要素がnullの場合の条件分岐
    echo '$nummersの3番目の要素には数字が入っていません';
    //$nummbersという配列の三番目の要素がnullの場合出力される
    }else{
    echo '$nummersの3番目の要素には数字が入っています';
    //$nummbersという配列の三番目の要素がnullではない場合出力されます
    Git
    <?php
      $nummers = array(19,20,21,null);
      //配列に数字を代入するtest
      echo $nummers[0];
      //$nummbersという配列の0番目の要素を出力する
      $nummers[] = 22;
      //$nummbersという配列に新しい要素を最後の要素に代入する
      echo $nummers[4];
      //$nummbersに新しく代入した要素を出力する
      $nummbers[0] = 1;
      //$numbersという配列の0番目の要素を1に上書きする
      echo $nummers[0];
      //$nummbersという配列の上書きした0番目の要素を出力する
    
      if ($nummers[3] == null){
          //$numbersという配列の三番目の要素がnullの場合の条件分岐
        echo '$nummersの3番目の要素には数字が入っていません';
        //$nummbersという配列の三番目の要素がnullの場合出力される
        }else{
        echo '$nummersの3番目の要素には数字が入っています';
        //$nummbersという配列の三番目の要素がnullではない場合出力されます
      }
    ?>
    
    <? php
         $scores = array(
          '数学' => 70,
          '英語' => 90,
          '国語' => 80,
          );
          //$scoresという連想配列のデータを入れた。配列と違う点は名前がついているかどうか
         $scores['国語'] += 5;
         //$scoresという配列の国語のカラムのデータを85に上書きする
         echo $scores['国語']
         //上書きをしたデータを出力する
         //差分test
    ?>
    
    <? php
    
    
    for($nummbers = 1;$nummbers <= 100;$nummbers ++){
        //$nummbersの初期値を1、100まで繰り返し、1ずつ増やす
        if ($nummbers % 3 == 0){
        //$nummbersの値が3の倍数であるとき
            continue;
        //その値をスキップする
        }
        echo $nummbers;
        //$nummbersの値を表示する
        };
        
    $nummbers = 1;
    //$nummbersを定義し、初期を1とする
    while($nummbers < 10){
        echo $nummbers;
        //$numbersの値が10になるまで繰り返し表示をする
        }
        
    $infomation = array(
        'name' => 'yuma',
        'age' => 18,
        'height' => 170
        );
    //$infomationという連想配列を定義する
        
    foreach($infomation as $personalinfomationname => $personalinfomation){
        echo $personalinfomationname.'は'.$personalinfomation.'です';
        //連想配列の値を名前を含めて繰り返す    
        }
        
    ?>
    
    <? php
    
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
    <? php
    
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

    //修正1
?>
