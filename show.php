<?php
    require 'connect.php';
    $page = $_GET['link'];
    if(is_numeric($page)){
      header("Location:index.php");
    }
    else
    {
        $sql = "SELECT * FROM CMS WHERE permalink = '{$page}'";
        $result = $db->query($sql);
        $allSql = "SELECT * FROM CMS";
        $navResult = $db->query($allSql);
        $contentResult = $db->query($sql);
        
    }
    
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
        <h2>Our CMS</h2>
        <h1><a href="admin.php">admin</a></h1>
       </div>
       <div id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
          <? while ($links = $navResult->fetch_assoc()): ?>
            <li><a href="show.php?link=<?=$links['permalink'];?>"><?= $links['title']?></a></li>
          <? endwhile ?>
        </ul>
       </div>
       <div id="content">
            <? while ($content = $contentResult->fetch_assoc()): ?>
                <h3><?= $content['title'] ?> </h3>
                <?= $content['content'] ?>
            <? endwhile ?>
       </div>
       <div id="footer">
        <? $foot = $result->fetch_assoc() ?>
         <p><strong>Created at:</strong><?=$foot['created_at']?> <span style="margin-left:5px;"><strong>Updated at:</strong></span><?= $foot['updated_at'] ?> </p>
       </div>
    </div>
</body>
</html>