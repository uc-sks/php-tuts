<!DOCTYPE html>
<html>
<body>
<?php
echo "Hello World! <be>";
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age);
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
echo "<br>";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
?>
</body>
</html>