
<?php
    $x = 5;
    $y = 10;
    function myTest()
    {
        global $x, $y;
        $y = $x + $y;
        echo "<h1>Variable x inside function is : $y</h1>";
    }
    myTest();
    echo "<h1>Variable x outside function is : $y</h1>";
?>
