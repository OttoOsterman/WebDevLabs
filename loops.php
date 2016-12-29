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

    for ($i = 2; $i < 30; ($i+2))
    {
        print $i;
        echo "<p>Energy Drinks available</p>";
    }

    for ($i = 3; $i < 30; ($i+3))
    {
        print $i;
        echo "<p>Beer available</p>";
    }

    for ($i = 4; $i < 30; ($i+4))
    {
        print $i;
        echo "<p>Spirits available</p>";
    }
    ?>
</p>
</body>
</html>