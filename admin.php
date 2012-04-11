<?php
    require 'authenicate.php';
    require 'connect.php';
    
    $sql = "SELECT * FROM CMS";
    $result = $db->query($sql);
    $tableSql = $db->query($sql);
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
        <h2>Our CMS</h2>
        <h1><a href="admin.php">admin</a></h1>
       </div>
        <div id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
          <? while ($links = $result->fetch_assoc()): ?>
            <li><a href="show.php?link=<?=$links['permalink'];?>"><?= $links['title']?></a></li>
          <? endwhile ?>
        </ul>
       </div>
       <div id="content">
        <h2 class="admin">Admin Page</h2>
        <table>
            <tr><td>My Pages!</td><td><a href="new.php">New Page</a></td></tr>
            <tr><td></td></tr>
            <? while ($row = $tableSql->fetch_assoc()): ?>
            <tr><td><?= $row['permalink'] ?></td><td><a href="edit.php?link=<?= $row['permalink']?>">Edit</a></td>
            <td><a href="delete.php?link=<?= $row['permalink']?>">Delete</a></td>
            <td><a href="show.php?link=<?= $row['permalink']?>">Show</a></td></tr>
            <? endwhile ?>
        </table>
       </div>
    </div>
</body>
</html>
