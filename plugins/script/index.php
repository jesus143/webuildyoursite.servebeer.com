<?php 



/*
Plugin Name: The Script
Plugin URI: http://webuildyoursite.servebeer.com/plugin
Description: This is the fav icon of the site
Author: Jesus Erwin Suarez
Version: 1.6
Author URI: http://webuildyoursite.servebeer.com
*/

	
define(pname_script, "script");
define(pname_script_url, plugins_url() . '/' . pname_script);



add_action("wp_head", "st_init");



function st_init() { 
	?> 
		<link rel="stylesheet" type="text/css" href="<?php print pname_script_url; ?>/mystyle.css">
	<?php  
}

 
