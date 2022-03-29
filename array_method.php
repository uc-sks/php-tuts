<!DOCTYPE html>
<html>
<body>
    <?php
    // count
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    echo "<br>";
    // in_array
    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    if (in_array("Glenn", $people)) {
        echo "Match found <br>";
    } else {
        echo "Match not found <br>";
    }
    // size of
    $cars = array("Volvo", "BMW", "Toyota");
    echo sizeof($cars);
    echo "<br>";
    // sort()
    $cars = array("Mercedees", "BMW", "Toyota");
    sort($cars);
    for ($i = 0; $i < count($cars); $i++) {
        echo $cars[$i];
        echo "<br>";
    }
    // arsort()
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    arsort($age);
    foreach ($age as $key => $value) {
        echo "Key:" . $key . ",  Value:" . $value . "<br>";
    }
    // array_column()
    $a = array(
        array(
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ),
        array(
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 3809,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        )
    );

    $last_names = array_column($a, 'first_name');
    print_r($last_names);
    echo "<br>";
    // array_combine()
    $fname = array("Peter", "Ben", "Joe");
    $age = array("35", "37", "43");
    $c = array_combine($fname, $age);
    print_r($c);
    echo "<br>";
    // array_merge()
    $a1 = array("red", "green");
    $a2 = array("blue", "yellow");
    print_r(array_merge($a1, $a2));
    echo "<br>";
    // array_diff()
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("e" => "red", "f" => "green", "g" => "blue");
    $result = array_diff($a1, $a2);
    print_r($result);
    echo "<br>";
    // array_keys()
    $a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
    print_r(array_keys($a));
    echo "<br>";
    // array_values()
    $a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
    print_r(array_values($a));
    echo "<br>";
    // array_unique()
    $a = array("a" => "red", "b" => "green", "c" => "red");
    print_r(array_unique($a));
    echo "<br>";
    // array_map()
    function myfunction($v)
    {
        return ($v * 10);
    }
    $a = array(1, 2, 3, 4, 5);
    print_r(array_map("myfunction", $a));
    echo "<br>";
    // array_replace
    $a1 = array("red", "green");
    $a2 = array("blue", "yellow");
    print_r(array_replace($a1, $a2));
    echo "<br>";
    // array_push()
    $a = array("red", "green");
    array_push($a, "blue", "yellow");
    print_r($a);
    echo "<br>";
    // array_pop()
    $a = array("red", "green", "blue");
    array_pop($a);
    print_r($a);
    ?>
</body>

</html>