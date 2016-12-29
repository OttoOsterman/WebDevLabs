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
        print "Day " . $i;
        if ($i % 2 == 0) {
            echo "<br><p>Energy Drinks available</p>";
        }
        if ($i % 3 == 0) {
            echo "<br><p>Beer available</p>";
        }
        if ($i % 4 == 0) {
            echo "<br><p>Spirits available</p>";
        }
        else if ((($i%2==0) || ($i%3==0) || ($i%4==0) == false)) {
            echo "<br><p>No drinks available</p>";
        }
    }
    ?>
</p>
</body>
</html>