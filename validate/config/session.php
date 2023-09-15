<?php

session_start();
function error_msg(){
    if(isset($_SESSION["error_msg"])){
        $output = htmlentities($_SESSION['error_msg']);
        $_SESSION['error_msg'] = null;
        return $output;
    }
}
function sucess_msg(){
    if(isset($_SESSION["sucess_msg"])){
        $output = htmlentities($_SESSION['error_msg']);
        $_SESSION['sucess_msg'] = null;
        return $output;
    }
}

?>