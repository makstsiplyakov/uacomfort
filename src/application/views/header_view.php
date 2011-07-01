<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $title_page;?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" href="<?php echo $base_img;?>favicon.ico" type="image/x-icon" /> 
	<link rel="shortcut icon" href="<?php echo $base_img;?>favicon.ico" type="image/x-icon" />
	<meta name="keywords" content="<?php foreach ($include_keywords as $key=>$item){echo $item;}?>" />
	<meta name="description" content="<?php echo $include_description;?>" />
	<?php foreach ($include_css as $key=>$item){echo $item;}?>
</head>
<body>