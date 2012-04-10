<?php

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
        <h2 class="admin">New Page</h2>
        <h1><a href="index.php">Home</a></h1>
       </div>
       <div id="content">
        <form action="post.php" method="post" class="form">
            <label for="name">Page Name</label><br/>
            <input name="name"/><br/>
            <label for="perma">Perma Link</label><br/>
            <input name="perma"/><br/><br/>
            <label for="input">Page Content</label><br/>
            <textarea cols=66 rows=8 name="content"></textarea><br/><br/>
            <input type="submit" value="Submit" />
        </form>
       </div>
    </div>
</body>
</html>
