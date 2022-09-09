<?php

echo "this is an echo statement <br>";

print "this is a print statement <br>";

$books = array("GOT", "LOTR", "Bible", "Clean Code");
echo implode(" ", $books);

echo "<br>";

$name = "Imanuel the 23th";
$nameArr = explode(" ", $name);
print_r($nameArr);

$x2 = null;
var_dump($x2);

echo "<br>";

define("KEYBOARD", "This is a constant! And also a keyboard");
echo KEYBOARD;

echo "<br>";
echo "Is Keyboard defined? =>", defined("KEYBOARD");

echo "<br>";
const KEYBOARD2 = "Another const. And another keyboard!";
echo KEYBOARD2;

echo "<br>";
$number = 3;
define("KEYBOARD" . $number, "Yet another const...");
echo KEYBOARD3;

echo "<br>";
echo "Preefined const: ", PHP_INT_MIN;
echo "<br>";
echo PHP_VERSION;

//Magic Constants, change automatically based on where they are
echo __LINE__;
echo "<br>";
echo __DIR__;
?>