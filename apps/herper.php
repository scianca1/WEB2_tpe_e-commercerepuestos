<?php

class helper
{
    function __construct(){
        if (strnatcasecmp(phpversion(), '5.4.0') >= 0) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        } else {
            if (session_id() == '') {
                session_start();
            }
        }
    }
    function checklogged()
    {
        // session_start();
        if (!isset($_SESSION['islogged'])) {
            header("location: " . BASE_URL . "formlogin");
            die();
        }
    }
}
