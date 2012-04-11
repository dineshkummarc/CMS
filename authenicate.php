<?php
define('ADMIN_LOGIN','test');
define('ADMIN_PASSWORD','test');

if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])
   || ($_SERVER['PHP_AUTH_USER'] != ADMIN_LOGIN)
   || ($_SERVER['PHP_AUTH_PW']) != ADMIN_PASSWORD)
   {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="CMS"');
    exit("Invalid username or password please go back and try again.");
   }
?>