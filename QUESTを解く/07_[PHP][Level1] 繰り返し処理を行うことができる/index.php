<?php 

// 100回 "こんにちは！" と出力する関数
function hello(){
    for($i = 0; $i <= 100; $i ++){
        echo 'こんにちは！' . '<br>';
    }
}
// hello();

//  n回羊の数えを出力する関数
function sheep($n){
    for($i = 1; $i <= $n; $i ++){
        echo "<div>羊が{$i}匹</div>";
    }
}
// sheep(5);

// 1 から 100 までの足し算の結果を出力する関数
function sum_1_100(){
    $sum = 0;
    for($i = 1; $i <= 100; $i++){
        $sum += $i;
    }
    return $sum;
}
// $result = sum_1_100();
// echo $result;

// 2つの整数 x と y が与えられ、x から y までの足し算の結果を出力する関数
function sum($x, $y){
    if(1 <= $x && $y <= 100){
        $x_sum = 0;
        $y_sum = 0;
        // 1から引数xまでの合計
        for($i = 1; $i <= $x; $i++){
            $x_sum += $i;
        }
        // 1から引数yまでの合計
        for($i = 1; $i <= $y; $i++){
            $y_sum += $i;
        }
        // トータルの合計値
        return $x_sum + $y_sum;
    } else {
        false;
    }
}
// $result = sum(10, 80);
// echo $result;

// 整数 n に対して、n 日間お手伝いを継続した時のお小遣いの金額を算出する関数
function fibonacci($n){
    if(1 < $n && $n <= 30){
        // 配列として値を保持
        $spending_money = [];
        $spending_money[0] = 0; //要素0
        $spending_money[1] = 1; //要素1
        // 要素が2以上からfor文の適用
        for($i = 2; $i <= $n; $i++){
            // フィボナッチ数列
            $spending_money[$i] = $spending_money[$i-1] + $spending_money[$i-2];
        }
        echo $spending_money[$n] . '<br>';
    }else if($n == 0){
        echo 0 . '<br>';
    }else if($n == 1){
        echo 1 . '<br>';
    }else{
        false;
    }
}

fibonacci(0);
fibonacci(1);
fibonacci(2);
fibonacci(3);
fibonacci(4);
fibonacci(7);
fibonacci(30);
