<!DOCTYPE html>
<html>

<body>
    <?php
    $a = 5; //integer
    $b = 5.34; //float
    $c = "hello"; //string
    $d = true; //boolean
    $e = 400; //null

    $a = (int) $a;
    $b = (float) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    //to verify the type of any object in php, use var_dump
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e); $x = 540;
    var_dump(is_int($x));

    $x = 67.89;
    var_dump(is_float($x));
    ?>
    
</body>

</html>