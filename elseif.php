<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <a href="home.php">home</a>
    <br>
    <?php
    $myage = 19;
    print "Drinks you can buy at the age of " . $myage . ":";
    if ($myage < 15) {
        print "</br>You're not allowed to buy anything!";
    }
    if ($myage >= 15) {
        print "</br>You are allowed to buy energy drink!";
    }
    if ($myage >= 18) {
        print "</br>You are allowed to buy beer!";
    }
    if ($myage >= 21)
        print "</br>You are allowed to buy spirits!"
    ?>
</p>
</body>
</html>