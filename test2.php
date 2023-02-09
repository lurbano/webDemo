<?php

    echo "Hi <em>Brooke</em>, Why are you late??? "; 
    echo "And you too Coen!!!<br>";
    print_r($_GET) . "<br>";
    echo "Hello " . $_GET["name"] . "<p>";

    echo '<input type=button value="Submit">';

    foreach ($_GET as  $id => $val){
        echo $id . "==>" . $val . "<br>";
    }

    $f = fopen("test.json", "w");
    fwrite($f, "This is a file.");
    fclose($f);
    echo "Saved";

?>
