<?php 
	/** 
	* Configuration

	* @package Wojo Framework
	* @author wojoscripts.com
	* @copyright 2024
	* @version Id: config.ini.php, v1.00 2024-11-02 08:06:23 gewa Exp $
	*/
 
	 if (!defined("_WOJO")) 
     die('Direct access to this location is not allowed.');
 
	/** 
	* Database Constants - these constants refer to 
	* the database configuration settings. 
	*/
	 define('DB_SERVER', 'localhost'); 
	 define('DB_USER', 'root'); 
	 define('DB_PASS', ''); 
	 define('DB_DATABASE', 'membershipmanagerpro');
	 define('DB_DRIVER', 'mysqli');
 
	 define('INSTALL_KEY', '845oR0ahZTwWGGHn'); 
 
	/** 
	* Show Debugger Console. 
	* Display errors in console view. Not recomended for live site. true/false 
	*/
	 define('DEBUG', false);
?>