<?php
require 'connect.php';

$updated_at = null;
$title = $_POST['name'];
$link = $_POST['perma'];
$content = $_POST['content'];
$created_at = null;
$sql = "INSERT INTO CMS (title, permalink, content, created_at, updated_at) VALUES ('{$title}', '{$link}', '{$content}', null, null)";
    
    if (strlen($_POST['name']) > 0 && strlen($_POST['perma']) > 0 && strlen($_POST['content']) > 0  ) {
        $db->query($sql);
        header("Location:index.php");
    }
    else
    {
           exit("All fields must contain data.");
    }
?>
