<?php
    require 'connect.php';
    
    $getNav = "SELECT * FROM CMS";
    $getHome = $db->query($getNav);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>CMS Home Page</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
    <div id="wrapper">
       <div id="header">
        
        <h1><a href="admin.php">admin</a></h1>
        <ul>
            <? while ($row = $getHome->fetch_assoc()): ?>
            <li><a href="show.php?link=<?=$row['permalink']?>"><?= $row['title']?></li>
            <? endwhile ?>
        </ul>
       </div>
    </div>
</body>
</html>
