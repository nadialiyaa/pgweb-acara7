<!DOCTYPE html>
<html>

<body>
    <?php

    $favfood = "sate padang";

    switch ($favfood) {
        case "ketoprak":
            echo "Your favorite food is ketoprak!";
            break;
        case "nasi goreng":
            echo "Your favorite food is nasi goreng!";
            break;
        case "sate padang":
            echo "Your favorite food is sate padang!";
            break;
        default:
            echo "Your favorite food is trash go to hell!";
    }
    ?>
</body>

</html>