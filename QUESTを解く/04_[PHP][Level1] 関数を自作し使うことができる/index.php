<?php 

function hello(){
    echo 'Hello, World' . '<br>';
}

hello();

function greeting($name = 'もりさき'){
    echo "<div> おはよう、{$name}! </div>";
}

 greeting('渡辺');
 greeting();