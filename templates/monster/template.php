<?php
echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://www.facebook.com/2008/fbml"
      xml:lang="en-US"
      lang="en-US">
<head>
	<title>'.$pagetitle.'</title>
	<meta name="keywords" content="'.$metatags.'" />
	<meta name="description" content="'.$metadescription.'" />
	<meta name="author" content="freearcadescript.net" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="'.$domain.'/templates/'.$template.'/styles.css" rel="stylesheet" type="text/css" />
	<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script>';
	include ("js/rating_update.php");
echo'</head>
<body>';
    if (!$facebookappid == "") { echo ''.$facebookappid.''; };
	include("templates/$template/blocks/topnav.php");
	echo'<div class="center">
		<div class="leftbar">';
			//include("templates/$template/blocks/search.php");
			//include("templates/$template/blocks/bannerleft.php");
			//include("templates/$template/blocks/bannersright.php");
			include("templates/$template/blocks/mymenu.php");
			//include("templates/$template/blocks/category.php");
			//include("templates/$template/blocks/ad1.php");
			//include("templates/$template/blocks/ad2.php");
			include("templates/$template/blocks/top.php");
			include("templates/$template/blocks/latest.php");
			include("templates/$template/blocks/submenu2.php");
			include("templates/$template/blocks/links.php");
			include("templates/$template/blocks/stats.php");
		echo'</div>
		<div class="main">';
			writebody();
		echo'</div>';
		/* Please do not remove the "powered by" link unless, you've purchased the removal. */
	include("templates/$template/blocks/powered.php");
	if (!$footerspace == "") { echo '<br /><div align="center">'.$footerspace.'</div><br />'; };
	if (!$analytics == "") { echo ''.$analytics.''; };
	echo'</div>';

	echo'
</body>
</html>';
?>