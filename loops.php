<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
    <br>
    <?php
    include 'navbar.php';

//    $multi2;
//    $multi3;
//    $multi4;


    $drinks = array("Energy Drink", "Beer", "Spirits");

    foreach($drinks as $x) {
        print "<p>$x</p>";
    }

    for ($i = 30; $i < 2; $i++)
    {
        print $i;
        echo "<p>Energy Drinks available</p>";
    }
    echo "<p>Energy Drinks available</p>";
    for ($i = 30; $i < 3; $i++)
    {
        print $i;
        echo "<p>Beer available</p>";
    }

    for ($i = 30; $i < 4; $i++)
    {
        print $i;
        echo "<p>Spirits available</p>";
    }
    ?>
</p>
</body>
</html>