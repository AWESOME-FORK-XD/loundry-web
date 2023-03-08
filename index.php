<?php
/**
* Uinsu Web Framework 
* Small, Fast, & Secure Web Framework
* Based on PHP
*
* @link		http://instagram.com/jud_oiiit
* @since	Version 3.5 (stable)
*
* The MVC schema for this framework
* props -> core 
* route -> controller
* bind -> view
* state -> model
*
*/

function __construct(){
	$getSelfData = [];
}

/**
* Call all function with init.php file
*/
require_once 'engine/init.php';

/**
* Instance new props to global & stack the function
*/
$props = new Props;