<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $file_name = $_FILES['file']['name'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_error = $_FILES['file']['error'];
    $file_size = $_FILES['file']['size'];

    $file_ext = explode('.', $file_name);
    $file_actual_ext = strtolower(end($file_ext));
    $allowed = array('jpg','jpeg','png','gif','rar','zip','mp3','mp4','pdf','avif','svg');

    if (in_array($file_actual_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size < 1000000000) {
                $file_new_name = uniqid('', true).'.'.$file_name;
                $file_dir = "./uploads/".$file_new_name;

                move_uploaded_file($file_tmp_name, $file_dir);
                echo "<script>alert('File uploaded successfully');</script>";
                header('Location: ./index.php');
            }else{
                echo "<script>alert('The file you uploaded is too large');</script>";
            }
        }else{
            echo "<script>alert('There was an error uploading the file');</script>";
        }
    }else{
        echo "<script>alert('You are not allowed to upload file of this extension');</script>";
    }
}