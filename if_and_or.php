<?php
$x = 0;
$y = 5;
$z = 10;

// if ($x < $y < $z) {
// 	echo "{$x} < {$y} < {$z}\n" . PHP_EOL;
// }

if ($x > 0 || $x < 10) {
 	echo "$x is greater than 0 OR less than 10" . PHP_EOL;
}

if ($y > 0 || $y < 10) {
	echo "$y is greater than 0 OR less than 10" . PHP_EOL;
}

if ($z > 0 || $z < 10) {
	echo "$z is greater than 0 OR less than 10" . PHP_EOL;
}
if ($x > 0 && $x < 10) {
	echo "$x is greater than 0 AND less than 10" . PHP_EOL;
}
if ($y > 0 && $y < 10) {
	echo "$y is greater than 0 AND less than 10" . PHP_EOL;
}
if ($z > 0 && $z < 10) {
	echo "$z is greater than 0 AND less than 10" . PHP_EOL;
}

 // repeat the if statement for $y and $z.
 $a = 7;
 $b = 3;
 $c = '8';

 // Shorten the next 2 statements into an if/else
 if ($a < $b) {
     echo "$a is less than $b" . PHP_EOL;
 } else {
 	echo "$a is greater than $b" . PHP_EOL;
 }

 if ($a > $b) {
 	echo "$b is less than $a" . PHP_EOL;
 } else {
     echo "$b is greater than $a" . PHP_EOL;
 }

 // Shorten the next 2 statements into an if/else
 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n" . PHP_EOL;
 }

 if ($b <= $c) {
     // output the appropriate result
     echo "$b is less than or equal to $c\n" . PHP_EOL;
 }

 // combine the next 4 conditionals into
 // one if/else/elseif block that checks in order for:
 // identical, equal, not identical, not equal
if ($b == $c) {
     // output the appropriate result
    echo "$b is equal to $c" . PHP_EOL;
} else {
 	echo "$b is not equal to $c" . PHP_EOL;
}

if ($b === $c) {
     // output the appropriate result
    echo "$b is identical to $c" . PHP_EOL;
}else if ($b == $c) {
 	echo "$b is equal to $c" . PHP_EOL;
} else {
 	echo "$b is not equal to $c" . PHP_EOL;
}


if ($b != $c) {
     // output the appropriate result
     echo "$b is not equal to $c" . PHP_EOL;
} else {
	echo "$b is equal to $c" . PHP_EOL;
}

if ($b !== $c) {
     // output the appropriate result
     echo "$b is not identical to $c" . PHP_EOL;
} else if ($b != $c) {
	echo "$b is not equal to $c" . PHP_EOL;
} else {
	echo "$b is equal to $c" . PHP_EOL;
}

 ?>