<?php
include "session.php";
if (!isset($_POST["submit"])) {
   header("Location: ../index.php"); 
}else {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $activities = $_POST["activities"];
    $file = $_FILES["file"];
    $file_name = $_FILES["file"]["name"];
    $file_size = $_FILES["file"]["size"];
    $file_tmp_name = $_FILES["file"]["tmp_name"];
    $file_error = $_FILES["file"]["error"];
    //  var_dump($file);
    if (empty($name) && $name = ' ') {
        header("Location: ../index.php"); 
        $_SESSION["error_msg"] = "name required";
    }elseif (empty($age)) {
        header("Location: ../index.php"); 
        $_SESSION["error_msg"] = "Age required";
    }elseif ($age < 18) {
        header("Location: ../index.php"); 
        $_SESSION["error_msg"] = "Only 18 and above";
    }elseif (empty($activities)) {
        header("Location: ../index.php"); 
        $_SESSION["error_msg"] = "select atleast One Activities";
    }
     else {
        // Type of Allowed Files
        $file_format_allow = array("png", "jpeg", "jpg");
        $ext = explode('.', $file_name );
        $ext = end($ext);
        $ext = strtolower($ext);
        var_dump($ext);
        if (!in_array($ext,$file_format_allow)) {
            header("Location: ../index.php");
            $_SESSION["error_msg"] = "Invalid file format (png, jpeg, jpg)";
        }else {
            if ($file_error > 0 ) {
                header("Location: ../index.php");
                 $_SESSION["error_msg"] = "File is corrupted";
            }else {
                if ($file_size > 400000) {
                    header("Location: ../index.php");
                    $_SESSION["error_msg"] = "File too large";
                }else {
                    header("Location: ../index.php");
                    $_SESSION["sucess_msg"] = "Form submited!!!";
                }
            }
        }

    }
}
?>
