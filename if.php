<?php
for($numbers = 1;$numbers <= 100;$numbers ++){
    //$nummbersの初期値を1、100まで繰り返し、1ずつ増やす
    if ($numbers % 3 == 0){
    //$nummbersの値が3の倍数であるとき
        continue;
    //その値をスキップする
    }
    echo $numbers;
    //$nummbersの値を表示する
    };

$numbers = 1;
//$nummbersを定義し、初期を1とする
while($numbers < 10){
    echo $numbers;
    //$numbersの値が10になるまで繰り返し表示をする
    $numbers++;
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
