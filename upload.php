<?php

            $target_dir = "/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
       
                $check = getimagesize($_FILES["file"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                   $uploadOk = 0;
                }
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded. \n";
                $respond = new StdClass;
                $respond->link = "http://localhost/webdev/img/video.jpg";

                 echo json_encode($respond);
                 echo stripslashes(json_encode($respond));
                // echo '{ "link": '.'"' . json_encode($target_file) . '"}';

                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }  
            // echo '{ "link": "http://localhost/webdev/img/video.jpg" }'
?>

