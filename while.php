<?php
$test = 5;
while ($test <= 15) {
    echo "\$test is equal to {$test}\n" . PHP_EOL;
    $test++;
}
$a = 5;
$firstCondition = 4;
$secondCondition = 2;
while ($a <= 15) {
if ($a % $firstCondition == 0 && $secondCondition == 0) {
	echo "$a is divisible by both {$firstCondition} and {$secondCondition}" . PHP_EOL;
}
 if ($a % $secondCondition == 0) {
	echo "$a is divisible by {$secondCondition}" . PHP_EOL;
}
	$a++;
	echo $a . PHP_EOL;

}
// 5
// 6 is divisible by 2
// 7
// 8 is divisible by both 4 and 2
// 9
// 10 is divisible by 2
// 11
// 12 is divisible by both 4 and 2
// 13
// 14 is divisible by both 2
// 15
?>