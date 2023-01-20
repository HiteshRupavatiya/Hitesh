<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
                $fileName     = $_FILES["file"]["name"];
                $fileType     = $_FILES["file"]["type"];
                $fileSize     = $_FILES["file"]["size"];
                $fileTmpName = $_FILES["file"]["tmp_name"];
          
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));
         
                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        
                $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
                if (in_array($fileExtension, $allowedfileExtensions))
                {
                    $uploadFileDir = './images/';
                    $dest_path = $uploadFileDir . $newFileName;
                    if(move_uploaded_file($fileTmpPath, $dest_path))
                    {
                        $message ='File is successfully uploaded.';
                    }
                    else
                    {
                        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                    }
                }
                else
                {
                    $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
                }
                    echo $message;
            } 
            else 
            {
                echo 'There was some error uploading the file ';
            }
        }

    ?>