<!DOCTYPE html>
<html>
<body>
<?php
// variable in php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
$txt = "W3Schools.com";
echo "I love $txt!";

// variable scope in php

$x = 5; // global scope

function myTest() {
    global $x;
  // using x inside this function will generate an error if we not use global keyword
  echo "<p>Variable x inside function is:  $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";


function myTest1() {
  $x = 7; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>


</body>
</html>