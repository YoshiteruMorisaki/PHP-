<?php 
// x,yの大小の比較を行う関数
function greater($x, $y){
    if(-100 <= $x && $y <= 100){
        if($x > $y){
            echo 'x > y' . '<br>';
        } else if($x < $y){
            echo 'x < y'. '<br>';
        } else if($x == $y){
            echo 'x == y'. '<br>';
        }
    }else{
        false;
    }
}

// greater(-49, 70);
// greater(70, 70);
// greater(-600, 70);
// greater(-49, 6000);

// 年齢別に電車賃を計算する関数
function train_fare($age){
    if(0 <= $age && $age <= 150){
        // 6歳未満
        if($age < 6){
            echo '電車賃は無料となります。' . '<br>';
        // 6歳以上12歳未満
        } else if($age < 12){
            echo '電車賃は100円となります。' . '<br>';
        // 12歳以上
        } else {
            echo '電車賃は200円となります。' . '<br>';
        }
    } else {
        false;
    }
}
// train_fare(12);
// train_fare(6);
// train_fare(5);
// train_fare(200);

// ブーリアン値の判別
function _xor($x, $y){
    if($x === true && $y === true || $x === false && $y === false){
        echo 'false' . '<br>';
    } else if($x === true || $y === true){
        echo 'true' . '<br>';
    }
}    
_xor(true, true);
_xor(true, false);
_xor(false, true);
_xor(false, false);