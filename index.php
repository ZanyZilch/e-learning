<?php
session_start();
if(!empty($_SESSION['USERNAME']))
{
    //Nothing here
}
else
{
    $_SESSION['USERNAME'] = 'no one';
    $_SESSION['ROL'] = 0;
}

include_once("DBconfig.php");
include_once("header.php");
?>