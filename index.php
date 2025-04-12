
<?php
    $x = 5;
    function myTest()
    {
        global $x;
        echo "<h1>Variable x inside function is : $x</h1>";
    }
    myTest();
    echo "<h1>Variable x outside function is : $x</h1>";
?>
