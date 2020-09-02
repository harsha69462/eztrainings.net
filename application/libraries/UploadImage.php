<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class UploadImage
{

  public function Upload($name)
  {
        // starts
        $target_dir = "assets/uploads/profile/";
        $prefix = md5(rand(1000,2000));
        $target_file = $target_dir .$prefix. basename($_FILES[$name]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES[$name]["size"] > 20000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            die("error");
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
                return $prefix. basename( $_FILES[$name]["name"]);
            } else {
                die("error");
                return "Sorry, there was an error uploading your file.";
            }
        }
        // ends
  }
}



?>
