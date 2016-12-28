<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
    <br>
    <?php
    include 'navbar.php';

    $badDrinks = array("Energy Drink", "Beer", "Spirits");

    foreach($badDrinks as $x) {
        print "<p>$x</p>";
    }

    $badDrinks[0] = "Cider";
    foreach($badDrinks as $x) {
        print "<p>$x</p>";
    }
    unset($badDrinks[2]);
    foreach($badDrinks as $x) {
        print "<p>$x</p>";
    }
    ?>
</p>
</body>
</html>