<?php
 require 'connect.php';
 $page = $_GET['link'];
 $sql = "DELETE FROM `CMS` WHERE permalink = '{$page}'";
 $db->query($sql);
 header("Location:index.php");
?>