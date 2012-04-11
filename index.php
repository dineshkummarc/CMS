<?php
    require 'connect.php';
    
    $getNav = "SELECT * FROM CMS";
    $getHome = $db->query($getNav);
    $getStamps = $db->query($getNav);
    $homeSQL = "SELECT content FROM CMS WHERE permalink = 'home'";
    $content = $db->query($homeSQL);
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
            <? while ($row = $getHome->fetch_assoc()): ?>
            <li><a href="show.php?link=<?=$row['permalink']?>"><?= $row['title']?></a></li>
            <? endwhile ?>
        </ul>
       </div>
       <div id="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
            et tortor vitae velit semper euismod eget eu metus. Pellentesque
            convallis, odio id faucibus fermentum, sem est eleifend dolor,
            vehicula auctor nunc ligula in ipsum. Nulla at laoreet augue. Sed
            sagittis mattis libero facilisis condimentum. Sed lacus turpis,
            malesuada ut tristique sit amet, scelerisque eu tortor. Praesent arcu
            erat, pretium imperdiet vehicula vulputate, pellentesque in tortor.
            Vivamus eget pulvinar lacus. Vivamus nisl quam, pretium pellentesque cursus
            sed, semper quis nibh.
            In at rhoncus nisl. Pellentesque eget urna eget augue feugiat aliquam. Proin
            elementum accumsan ultrices. Fusce laoreet venenatis odio fringilla viverra.
            Donec non turpis quis libero cursus fermentum. Curabitur sagittis, nibh sed
            tristique pharetra, nulla ipsum euismod dolor, vitae pellentesque mi eros eget
            est. Pellentesque aliquet pellentesque accumsan. Cras fringilla varius arcu,
            ut luctus tellus consectetur vel. Aliquam quis magna eget orci vehicula
            placerat eu vitae mauris. Vestibulum ante ipsum primis in faucibus orci
            luctus et ultrices posuere cubilia Curae; Praesent lacus lorem, vulputate
            vitae blandit sed, suscipit in sem. Phasellus accumsan pretium nisi in rutrum.
            Pellentesque ultrices, odio vel ultrices ornare, massa orci auctor magna, ut
            aliquam diam justo sed arcu. Curabitur sed est eros. Donec sapien nunc, tempus
            id mollis a, luctus aliquet orci. </p>
       </div>
       <div id="footer">
        <? $foot = $getStamps->fetch_assoc() ?>
        <p><strong>Created at:</strong><?=$foot['created_at']?> <span style="margin-left:5px;"><strong>Updated at:</strong></span><?= $foot['updated_at'] ?> </p>
       </div>
    </div>
</body>
</html>
