<!DOCTYPE html>
<html>

<body>
    <?php
    // create array:
    $food = array("FOOD","nasgor", "piscok", "apples", "bananas", "mango");
    $color= array("COLOR","brown","black", "green", "yellow", "pink");
    $country= array("COUNTRY","indonesia", "malaysia", "bekasi", "italy", "japan");

    echo "<table border='2'>";
    for ($i=0; $i<=5; $i++) {
        echo "<tr><td> $food[$i] </td><td> $color[$i]</td><td> $country[$i]</td></tr>"
    ;}
    echo "</table>";
    ?>


</body>

</html>