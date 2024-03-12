<?php

// $a = 75;
$a = 200;

if ($a > 50 && $a < 60) {
    echo 'D';
} else if ($a >60 && $a < 70) {
    echo 'C';
} else if ($a > 70 && $a < 80) {
    echo 'B';
} else if ($a > 80 && $a <= 100) {
    echo 'A';
} else {
    echo 'Invalid Result';
}
?>