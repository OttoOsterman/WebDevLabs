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
        }
        if ($i % 3 == 0) {
            print "Day: " . $i . "Beer available";
        }
        if ($i % 4 == 0) {
            print "Day: " . $i . "Spirits available";
        }
    }
    ?>
</p>
</body>
</html>