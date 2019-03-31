<?php

    $dir = "/home/icedri3/public_html/Pool-vids/original_vids"; 

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    echo "<select id='videos'>";
    while (($file = readdir($dh)) !== false){
      echo "<option id=videoFile value=/~icedri3/Pool-vids/original_vids/".$file.">" . $file . "</option>";
    }
    echo '</select>';
    closedir($dh);
  }
}

?>