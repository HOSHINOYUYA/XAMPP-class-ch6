<?php
function printHeader() {
   print "<h3>網頁設計</h3>";
   echo "<hr/>";
}
function printfooter(){
    echo "<hr/>";
    print "<h3>footer</h3>";
}
function plus_culculater($A,$B){
    $result = $A + $B;
    echo "$result";
    echo "</br>";

}
function hello(?string $name){
    echo "hello $name";
    echo "</br>";

}
$func = function($length, $width=10, $height=15) {
    print $length."x".$width."x".$height."= ";
    return $length * $width * $height; 
 };

function callFunc1(Closure $closure) {
    $closure();
}
function callFunc2(Callable $callback) {
    $callback();
}

$hello = function() {
    echo "Hello, World!<br/>";
};
function hi() {
    echo "Hi, World!<br/>";
}



printheader();
plus_culculater(1,2);

$test = 15;
var_dump($test);
unset($test);
echo "</br>";

hello("BOY");
hello(null);

$l = 123;   $w = 312;   $h = 321; 
print $func($l, $w, $h)."<br/>";
print $func($l, $w)."<br/>";
print $func($l)."<br/>";

callFunc1($hello);
callFunc2("hi");
callFunc2($hello);



$filename = "test.txt";
$filename2 = "tset.txt";


    $result = "";
    if (isset($_POST['add'])) {
        $result = @fopen($filename, "r")
        or exit("錯誤: 檔案 $filename 開啟錯誤!<br/>");;
    }
    echo $result;

    $result2 = "";
    if (isset($_POST['add2'])) {
        $result2 = @fopen($filename2, "r")
        or exit("錯誤: 檔案 $filename2 開啟錯誤!<br/>");;
    }
    echo $result2;

printfooter();
?>
<html>

<form action="ch6_homework.php" method="post">
    <button type="submit" name="add">開啟text.txt</button>
</form>
<form action="ch6_homework.php" method="post">
    <button type="submit" name="add2">開啟txet.txt(不在這樣檔案)</button>
</form>

</html>
