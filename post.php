<?php
$updated_at = null;
$title = $_POST['name'];
$link = $_POST['perma'];
$created_at = null;
$sql = "INSERT INTO CMS (title, permalink) VALUES ('{$title}', '{$link}')";
    
    if (strlen($_POST['name']) > 0 && strlen($_POST['perma']) > 0 && strlen($_POST['content']) > 0 ) {
        $db->query($sql);
        header('Location:index.php');
    }
    else
    {
           exit("All fields must contain data.");
    }
?>