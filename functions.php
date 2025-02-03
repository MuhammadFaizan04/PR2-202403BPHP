<?php
$x = 10;
function printVal(){
    global $x;
    echo $x ."<br>";
}
printVal();

function hello(){
    $x = 10;
    

}
?>