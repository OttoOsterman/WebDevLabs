<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <br>
    <?php
    include 'navbar.php';

    for ($i = 1; $i < 30; $i++) {
        if ($i % 2 == 0) {
            print "Day: " . $i . "Energy Drinks available";
            echo "<br>";
        }
        if ($i % 3 == 0) {
            print "Day: " . $i . "Beer available";
            echo "<br>";
        }
        if ($i % 4 == 0) {
            print "Day: " . $i . "Spirits available";
            echo "<br>";
        }
    }
    ?>
</p>
</body>
</html>