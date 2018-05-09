<?php

// Check whether upload is successfull
  if ($_FILES["file"]["error"] > 0)  
    {  
    echo "错误: " . $_FILES["file"]["error"] . "<br />";  
    }  
  else  
    {  
    echo "文件名: " . $_FILES["file"]["name"] . "<br />";  
    echo "类型: " . $_FILES["file"]["type"] . "<br />";  
    echo "大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";   
    }  


// Check whether the file exist
  if (file_exists("temp_files/" . $_FILES["file"]["name"]))  
      {  
        echo $_FILES["file"]["name"] . " 文件已经存在. ";  
      }  
  else  
      {  
        move_uploaded_file($_FILES["file"]["tmp_name"], "temp_files/" .  $_FILES["file"]["name"]);  

        echo "文件已经被存储到: " . "upload/" . $_FILES["file"]["name"];  

        // Set cookie to store file name
          setcookie("fileName", $_FILES["file"]["name"]);
          
        

      }   

?>


