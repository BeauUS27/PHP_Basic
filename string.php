<?php

$str = "Hello PHP Programming Language";

echo strlen($str);
echo "<br />";

// หาว่ามีคำว่า red ในประโยครึป่าว
echo strpos($str, "red");
// การตัดคำทิ้ง
echo substr($str, 10, 5);

$arr = explode(" ", $str);

var_dump($arr);

$arr = ['Hello', 'PHP', '.', 'js'];
$str = implode('_', $arr);
echo $str;

$a = 10;
$b = 5;
$c = "Hello";

$output = "$a$b$c";
echo "<br />";
echo $output;
echo 'Hello the PHP';
?>