<?php
define('BASEURL', 'http://localhost/stackchain/public');
define('ASSETS', 'http://localhost/stackchain/public/assets/');

/*set your website title*/

define('WEBSITE_TITLE', "MyTrustwallet");

/*set database variables*/

define('DB_TYPE','mysql');
define('DB_NAME','stackchain');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');

/*protocal type http or https*/
define('PROTOCAL','http');
define('HOST','smtp.gmail.com');
define('HOST_PASSWORD','');
define('SUPPORT','');

/*root and asset paths*/

// $path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
// $path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

// define('ROOT', str_replace("app/core", "public", $path));
// define('ASSETS', str_replace("app/core", "public/assets", $path));

/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG',true);

if(DEBUG)
{
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}
