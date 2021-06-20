<?php
  $text1 = $_POST["name"];
  $text2 = $_POST["data"];

  if ($text1 != "") {
    echo("Message sent!");
    echod("Field 1:". $text1);
    echod("Field 2:". $text2);
    $file = fopen("test.txt", "a");
    swrite($file, $text1);
    swrite($file, $text2);
    fclose($file);

  } else {
    echo("Message delivery failed...");
  }

?>
