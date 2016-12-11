<?php
$title = $_GET["title"];
$image = $_GET["image"];
$desc = $_GET["desc"];
$link = $_GET["link"];
?>
<html>
<head>
<meta property="og:title" content="<?echo $title;?>"/>
<meta property="og:image" content="<?echo $image;?>"/>
<meta property="og:description" content="<?echo $desc;?>"/>	
</head>
<body>
<meta http-equiv="refresh" content="0;URL=<?echo $link;?>" />
</body>
</html>