<?php
/**
* Base rule file Uinsu-Web-Framework
*/

/**
* URL base, jika di upload ke hosting, perhatikan http/https, karena akan berpengaruh
*/
$homeBase = 'http://localhost/laundry/';

/**
* Site name (nama situs web)
*/
$siteName = 'Sistem_Laundry';

/**
* Author (Pengembang / pemilik website)
*/
$author = 'KDM&A Dev';

/**
* Default route
*/
$mainRoute = 'login';

/**
* Path to  style asset (css, js, dll)
*/
$styleBase = $homeBase.'ladun';

/**
* Define to public
*/
define('HOMEBASE',$homeBase);
define('SITENAME',$siteName);
define('AUTHOR',$author);
define('MAINROUTE',$mainRoute);
define('STYLEBASE',$styleBase);
define('IMGBASE',$imgBase);


