<?php
    $chore = $_POST["chore"];
    $person = $_POST["person"];
    $day = $_POST["day"];
    

    $file = "../".$person."/".$day;

    $contents = file_get_contents($file);
    $contentsLen = strlen($contents);

    $choreIndex = strpos($contents, $chore);
    $choreLen = strlen($chore);

    if ($choreIndex !== FALSE) {
        if ($choreIndex == 0) {
            $newContents = $newContents.substr($contents, $choreIndex + $choreLen + 4);

            file_put_contents($file, $newContents);
        } else {
            $newContents = substr($contents, 0, $choreIndex - 1);
            $newContents = $newContents.substr($contents, $choreIndex + $choreLen + 3);

            file_put_contents($file, $newContents);
        }
    }
?>