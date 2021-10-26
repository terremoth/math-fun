<?php 

/**
 * a^n + b^n == c^n
 * n > 2
 */

function guess_fermat_proof($a, $b, $c, $n) { 
    $x = pow($a, $n);
    $y = pow($b, $n);
    $z = pow($c, $n);
    $r = $x + $y;
    
    
    echo "| $x + $y == $r == $z | ";
    echo "Result: $r\t";
    return $r === $z;
}


while(true) {
    $a = mt_rand(2, 100);
    $b = mt_rand(2, 100);
    $c = mt_rand($a+$b, ($a+$b)*100);
    $n = mt_rand(3, 10);
    
    echo "a: $a\t\tb: $b\t\t c: $c\t\t n: $n\t\t";
    
    $result = guess_fermat_proof($a, $b, $c, $n);
    
    if ($result) {
        echo "TRUE - FOUND!!!".PHP_EOL;
        break;
    } else {
        echo "False".PHP_EOL;
    }
     
}

