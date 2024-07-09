<?php 

// IDと従業員の名前をセットにして出力する関数
function print_names(array $names){
    foreach($names as $id => $name){
        echo "<div>{$id}. {$names[$id]}</div>";
    }
}

// print_names(['上田', '田仲', '堀田']);

// 与えられた整数の配列の要素を2乗した配列を返す関数
function square(array $numbers){
    return $doubled_numbers = array_map(function($numbers){
        return $numbers *= $numbers;
    }, $numbers);
}

// $squared_numbers = square([5, 7, 10]);
// print_r($squared_numbers);
// var_dump($squared_numbers);

// 整数の配列から偶数を抽出した配列を返す関数
function select_even_numbers(array $numbers){
   return $numbers = array_filter($numbers, function($numbers){
        return $numbers %2 == 0;
    });
}

$even_numbers = select_even_numbers([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
print_r($even_numbers);
