<?php
session_start();
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '210023453743763',
    'app_secret' => '08acfa3f4cd2dc3925db5716cf0e94e8',
    'default_graph_version' => 'v2.7'
]);