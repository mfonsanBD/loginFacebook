<?php
require 'fb.php';

if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])){
    echo "Logado!";
}else{
    header("Location: login.php");
}