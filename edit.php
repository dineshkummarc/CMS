<?php
 require 'connect.php';
$link = $_GET['link'];
$sql = "SELECT * FROM CMS WHERE permalink = '{$link}'";
$sql2 = "SELECT * FROM CMS";
$resultLinks = $db->query($sql2);
$result = $db->query($sql);
?>
<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>CMS Edit Page</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <script type="text/javascript" src="script/jscripts/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
    tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
</head>
<body>
    <div id="wrapper">
       <div id="header">
        <h2 class="admin">Our CMS</h2>
        <h1><a href="index.php">Home</a></h1>
        <h1><a href="admin.php">admin</a></h1>
       </div>
        <div id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
          <? while ($links = $resultLinks->fetch_assoc()): ?>
            <li><a href="show.php?link=<?=$links['permalink']?>"><?= $links['title']?></a></li>
          <? endwhile ?>
        </ul>
       </div>
       <div id="content">
        <? $row = $result->fetch_assoc() ?>
        <form action="insert.php" method="post" class="form">
            <label for="name">Page Name</label><br/>
            <input name="name" value="<?=$row['title']?>"/><br/>
            <label for="perma">Perma Link</label><br/>
            <input name="perma" value="<?=$row['permalink']?>"/><br/><br/>
            <label for="input">Page Content</label><br/>
            <textarea cols=66 rows=8 name="content"><?= $row['content']?></textarea><br/><br/>
            <input type="submit" value="Update" />  
        </form>
       </div>
    </div>
</body>
</html>