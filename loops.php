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
            print "Day: " . $i;
            echo "<p>Energy Drinks available</p>";
        }
        if ($i % 3 == 0) {
            print "Day: " . $i;
            echo "<p>Beer available</p>";
        }
        if ($i % 4 == 0) {
            print "Day: " . $i;
            echo "<p>Spirits available</p>";
        }
    }
    ?>
</p>
</body>
</html>