
<?php
define("GREETING", "欢迎访问 Runoob.com");
 
function myTest() {
	define("GREETING", "today is 1.5"); //define 定义在里面似乎无效
    echo GREETING;
}
 
myTest();    // 输出 "欢迎访问 Runoob.com"
?>
