<?php
$x=5;


function myTest()
{
    global $x,$y;
    $y=$x+$y;
}

myTest();
$y=10;   // 变量值可以被覆盖
echo $y; // 输出 15
?> 