<?php


/*
Plugin Name: Fav Icon
Plugin URI: http://webuildyoursite.servebeer.com/plugin
Description: This is the fav icon of the site
Author: Jesus Erwin Suarez
Version: 1.6
Author URI: http://webuildyoursite.servebeer.com
*/

	
define(pname_fav_icon, "fav-icon");
define(pname_fav_icon_url, plugins_url() . '/' . pname_fav_icon);





add_action("wp_head", "fi_init");

 
function fi_init() { 
	?> 
		<link rel="apple-touch-icon" sizes="57x57" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php print  pname_fav_icon_url ?>/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php print  pname_fav_icon_url ?>/iconsandroid-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php print  pname_fav_icon_url ?>/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php print  pname_fav_icon_url ?>/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php print  pname_fav_icon_url ?>/icons/favicon-16x16.png">
		<link rel="manifest" href="<?php print  pname_fav_icon_url ?>/icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php print  pname_fav_icon_url ?>/icons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

	<?php  
} 