<?php
require 'fb.php';

$helper = $fb->getRedirectLoginHelper();
$permissao = array('email');

$loginurl = $helper->getLoginUrl('http://localhost/phpwebservices/login_facebook/callback.php', $permissao);
?>
<a href="<?=htmlspecialchars($loginurl);?>">Login com o Facebook</a>