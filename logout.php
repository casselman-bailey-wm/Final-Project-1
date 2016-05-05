<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 5/3/16
 * Time: 5:43 PM
 */

session_start();

if($_SESSION['userSession'] == true){

    session_destroy();
    $_SESSION['userSession'] = false;
    header('Location: account.php');
    exit;

}else{

    header('Location: index.php');

}