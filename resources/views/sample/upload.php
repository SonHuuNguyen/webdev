<?php
   
            $target_dir = "C:\\xampp\htdocs\webdev\img\\";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
       
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $response = new StdClass;
                 $response->link = 'http://localhost/webdev/img/' . basename($_FILES["file"]["name"]);
                 echo stripslashes(json_encode($response));
                } 
                
                else {
                //   $respond = new StdClass;
                // $respond->link = "http://localhost/webdev/img/video.jpg";
                //  echo stripslashes(json_encode($respond));
                }  

?>

