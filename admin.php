<?php
    require 'authenicate.php';
    require 'connect.php';
    
    $sql = "SELECT * FROM CMS";
    $result = $db->query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Admin</title>

    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
    <div id="wrapper">
       <div id="header">
        <h2 class="admin">Admin Page</h2>
       </div>
       <div id="content">
        <table>
            <tr><td>Pages</td></tr>
            <tr><td><a href="new.php">New Page</a></td></tr>
            <? while ($row = $result->fetch_assoc()): ?>
            <tr><td><?= $row['permalink'] ?></td><td><a href="edit.php/link=<?= $row['permalink']?>">Edit</a></td>
            <td><a href="delete.php/link=<?= $row['permalink']?>">Delete</a></td></tr>
            <? endwhile ?>
        </table>
       </div>
    </div>
</body>
</html>
