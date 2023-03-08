<?php

/**
 * Database rule file Uinsu-Web-Framework
 */

/**
 * Database server (cth : localhost)
 */
$dbServer = 'sql309.epizy.com';

/**
 * Database user
 */
$dbUser = 'epiz_33747214';

/**
 * Database password
 */
$dbPassword = '';

/**
 * Database name
 */
$dbName = 'epiz_33747214_db_loundry';

/**
 * Database driver
 */
$dbDriver = 'mysqli';

/**
 * Query builder
 */

$insert = 'INSERT INTO ';
$select = 'SELECT ';
$delete = 'DELETE FROM ';
$update = 'UPDATE ';

/**
 * Define to public
 */

define('DB_DRIVER', $dbDriver);
define('DB_SERVER', $dbServer);
define('DB_USER', $dbUser);
define('DB_PASSWORD', $dbPassword);
define('DB_NAME', $dbName);

define('DB_INSERT', $insert);
define('DB_SELECT', $select);
define('DB_UPDATE', $update);
define('DB_DELETE', $delete);
