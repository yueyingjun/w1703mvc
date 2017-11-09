<?php
$a=0;

function aa(&$abc){
    $abc++;
    echo $abc;
}

aa($a);
echo $a;






//php  函数不会自动扩展作用域
?>

