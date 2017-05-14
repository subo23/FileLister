<?php

//$dir_path = "folder/";
$dir_path = "D:/xampp/htdocs/";
$options = "";
if(is_dir($dir_path))
{
    $files = opendir($dir_path);
    {
        if($files)
        {
          while(($file_name = readdir($files)) !== FALSE)
          {
              if($file_name != '.' && $file_name != '..')
              {
               // select option with files names
               $options = $options."<option>$file_name</option>";   
               
               // display the file names
               echo $file_name."<br>";
              }
          }
        }
}
}

?>
