<?php
    require 'test1.php';
    require 'test2.php';

    function hello()
    {
        echo "Hello from products<br>";
    }

    use test1\v1\spaces as demo;
    
    $obj1 = new demo\test();
    $obj2 = new test2\test();
    demo\hello();
    test2\hello();
    hello();
?>