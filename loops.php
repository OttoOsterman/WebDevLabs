<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <br>
    <?php
    include 'navbar.php';

//    $drinks = array("Energy Drink", "Beer", "Spirits");
//
//    foreach($drinks as $x) {
//        print "<p>$x</p>";
//    }

    for ($i = 1; $i < 30; $i++)
    {
        if ($i % 2 == 0) {
            echo "<p>Day: </p>";
            print $i;
            echo "<p>Energy Drinks available</p>";
        }
    }

//    for ($i = 1; $i < 30; $i++)
//    {
//        print $i;
//        echo "<p>Beer available</p>";
//    }
//
//    for ($i = 1; $i < 30; $i++)
//    {
//        print $i;
//        echo "<p>Spirits available</p>";
//    }
    ?>
</p>
</body>
</html>