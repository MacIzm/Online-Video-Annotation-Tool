<?php

    $dir = "/home/icedri3/public_html/testvids"; #/home/icedri3/public_html/Pool-vids/poolvids

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    echo "<select id='videos'>";
    while (($file = readdir($dh)) !== false){
      echo "<option id=videoFile value=/~icedri3/testvids/".$file.">" . $file . "</option>";
    }
    echo '</select>';
    closedir($dh);
  }
}

?>
