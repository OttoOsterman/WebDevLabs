<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
    <br>
    <?php
    include 'navbar.php';
    $wantedgood = "Beer";
    switch ($wantedgood) {
        case $wantedgood = "Energy Drink":
            echo "You have to be 15 to buy " . $wantedgood . ".";
            break;
        case $wantedgood = "Beer":
            echo "You have to be 18 to buy " . $wantedgood . ".";
            break;
        case $wantedgood = "Spirits":
            echo "You have to be 21 to buy " . $wantedgood . ".";
            break;
        default:
            echo "You're too young to buy anything!";
    }
    ?>
</p>
</body>
</html>