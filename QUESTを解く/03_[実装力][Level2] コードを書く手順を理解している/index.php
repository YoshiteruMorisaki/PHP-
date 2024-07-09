<?php 
/*数字を1から100まで順番に出力していき
3の倍数の時「Fizz」
5の倍数の時「Buzz」
3かつ5の倍数の時「FizzBuzz」
を表示させる関数
*/
function Fizz_buzz(){
    for($i = 1; $i <= 100; $i++){
        // 3の倍数かつ5の倍数のとき
        if($i %3 == 0 && $i %5 == 0){
            echo 'FizzBuzz' . '<br>';
        // 3の倍数のとき
        } else if($i %3 == 0) {
            echo 'Fizz' . '<br>';
        // 5の倍数のとき
        } else if($i %5 == 0){
            echo 'Buzz' . '<br>';
        // 上記以外の数値    
        } else {
            echo $i . '<br>';
        }
    }
}

Fizz_buzz();