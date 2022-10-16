<?php

class helper
{
    function checklogged()
    {
        session_start();
        if (!isset($_SESSION['islogged'])) {
            header("location: " . BASE_URL . "formlogin");
            die();
        }
    }
}
