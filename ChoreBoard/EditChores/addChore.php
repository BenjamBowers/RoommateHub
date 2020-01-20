<?php
    $newChore = $_POST["chore"];
    $person = $_POST["person"];
    $day = $_POST["day"];
    

    $file = fopen("../".$person."/".$day, "a+");

    if (fgets($file) != "") {
        fwrite($file, "\n".$newChore."/"."u/");
    } else {
        fwrite($file, $newChore."/"."u/");
    }
    fclose($file);
?>