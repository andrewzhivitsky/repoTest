<?php
//$closure = function($name){
//    return "Hello $name \n";
//    };
//echo $closure('John'); //__invoke()
//echo get_class($closure);

$close = function($fizz, $buzz, $num) {
    $result = [];
    for ($i = 1; $i <= $num; $i++) {
        if (($i % $fizz == 0) && ($i % $buzz == 0)) {
            $result[] = "FB ";
        } elseif ($i % $buzz == 0) {
            $result[] = "B ";
        } elseif ($i % $fizz == 0) {
            $result[] = "F ";
        } else $result[] = $i . " ";
    }
    return $result;
};

print_r ($close(4,5,50));

