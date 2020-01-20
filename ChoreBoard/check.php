<?php
    $chore = $_POST["chore"];
    $person = $_POST["person"];
    $day = $_POST["day"];
    if ($_POST["checked"] == "true") {
        $checked = TRUE;
    } else {
        $checked = FALSE;
    }

    echo "chore: ".$chore."\n";
    echo "person: ".$person."\n";
    echo "day: ".$day."\n";
    echo "checked: ".$_POST["checked"]."\n";
    $file = $person."/".$day;

    $contents = file_get_contents($file);
    $contentsLen = strlen($contents);

    $choreIndex = strpos($contents, $chore);
    $choreLen = strlen($chore);

    if ($choreIndex !== FALSE) {
        if ($checked) {
            $newContents = substr($contents, 0, $choreIndex + $choreLen)."/c/";
            $newContents = $newContents.substr($contents, $choreIndex + $choreLen + 3);

            file_put_contents($file, $newContents);
        } else {
            $newContents = substr($contents, 0, $choreIndex + $choreLen)."/u/";
            $newContents = $newContents.substr($contents, $choreIndex + $choreLen + 3);

            file_put_contents($file, $newContents);
        }
    }
?>