<?php


session_start();

include 'post.php';

if (isset($_SESSION['user']))
{
    
    
    if ($_SESSION['type'] == 0)
    {
        echo $_SESSION['user'] . 'this is a normal user';}
    if ($_SESSION['type'] == 1)
    {
        echo $_SESSION['user'] . 'this is a admin';
    }
}






?>