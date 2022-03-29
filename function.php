<!DOCTYPE html>
<html>
<body>

<h1>Function in php</h1>
<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
// pass by reference
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;
  echo "</br>";
  // pass by value
  function delete_4($data){
      $data -= 4;
      return $data;
  }
  echo  delete_4(10);
?>

</body>
</html>