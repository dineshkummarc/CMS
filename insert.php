<?php
 require 'connect.php';
 $link = $_POST['perma'];
 $sql = "UPDATE CMS SET title = '{$_POST['name']}', permalink = '{$_POST['perma']}', content = '{$_POST['content']}', updated_at = now() WHERE permalink = '{$_POST['perma']}'";
 if(($_POST['name'] && $_POST['perma'] && $_POST['content']) > 0 && (!(is_numeric($link))))
 {
    $db->query($sql);
    header("Location:index.php");
 }
 else
 {
    exit("You must have data in all fields");
 }
?>

