<?php
    require 'connect.php';
    $sql = "SELECT * FROM CMS WHERE permalink = '{$_GET['permalink']}";
    $result = $db->query($sql);

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
          <h2><?= $result['title']?></h2>

       </div>
       <div id="content">

       </div>
    </div>
</body>
</html>