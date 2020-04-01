<?php
session_start();
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '0000', // Já tenho o ID do meu App
    'app_secret' => '00000', // Já tenho o App Secret
    'default_graph_version' => 'v2.7'
]);