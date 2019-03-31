<?php

    $dir = "/home/icedri3/public_html/Pool-vids/poolvids";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    echo "<select >";
    while (($file = readdir($dh)) !== false){
      if($file =='.' || $file =='..'){
        continue;
      }else{
        echo "<option  id=videoFile value=/~icedri3/Pool-vids/poolvids/".$file.">" . $file . "</option>";
      }

    }
    echo '</select>';
    closedir($dh);
  }
}

?>
