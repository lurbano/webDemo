<?php

    echo "Hi <em>Brooke</em>, Why are you late??? "; 
    echo "And you too Coen!!!";
    print_r($_GET);

    $f = fopen("test.json", "w");
    fwrite($f, "This is a file.");
    fclose($f);

?>