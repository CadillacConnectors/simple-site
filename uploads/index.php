<?php

//This file is copied into /var/www/html/uploads by a crontab script

$dir = "/var/www/html/uploads";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if (strrpos($file, ".") != 0 || strpos($file, "..") != 0)  {
        echo $file . "\n";
      }
    }
    closedir($dh);
  }
}
?>
