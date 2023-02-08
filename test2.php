<?php

    echo "Hi <em>Brooke</em>, Why are you late??? "; 
    echo "And you too Coen!!!<br>";
    print_r($_GET) . "<br>";
    echo "Hello " . $_GET["name"];

    foreach ($_GET as $id){
        echo $id . "==>" . $_GET[$id] . "<br>";
    }

    $f = fopen("test.json", "w");
    fwrite($f, "This is a file.");
    fclose($f);
    echo "Saved";

?>