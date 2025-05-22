<?php
  
// PHP program to reverse
// digits of a number
$rev_num = 0;
$base_pos = 1;

/* Recursive function to
reverse digits of num*/
function reversDigits($num) {
    global $rev_num;
    global $base_pos;
    if($num > 0) {
        reversDigits((int)($num / 10));
        $rev_num += ($num % 10) *
                    $base_pos;
        $base_pos *= 10;
    }
    return $rev_num;
}

// Driver Code
$num = 356;
echo $num;
echo "\r\n";
echo 
    reversDigits($num);

?>