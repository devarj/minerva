<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['dsn']      The full DSN string describe a connection to the database.
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database driver. e.g.: mysqli.
|			Currently supported:
|				 cubrid, ibase, mssql, mysql, mysqli, oci8,
|				 odbc, pdo, postgre, sqlite, sqlite3, sqlsrv
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Query Builder class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['encrypt']  Whether or not to use an encrypted connection.
|	['compress'] Whether or not to use client compression (MySQL only)
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|	['failover'] array - A array with 0 or more data for connections if the main should fail.
|	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
| 				NOTE: Disabling this will also effectively disable both
| 				$this->db->last_query() and profiling of DB queries.
| 				When you run a query, with this setting set to TRUE (default),
| 				CodeIgniter will store the SQL statement for debugging purposes.
| 				However, this may cause high memory usage, especially if you run
| 				a lot of SQL queries ... disable this to avoid that problem.
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $query_builder variables lets you determine whether or not to load
| the query builder class.
*/




// $connection = mysqli_connect('localhost','root','');
// if (!$connection) {
    // die("Database connection failed: " . mysqli_connect_error($connection));
// }
// $db_select = mysqli_select_db($connection, 'shops_main');
// if (!$db_select) {
    // die("Database selection failed: " . mysqli_connect_error($connection));
// }

// $query = "SELECT * FROM shops";
// $result_connection = mysqli_query($connection,$query);
// while($row = mysqli_fetch_array($result_connection))
// {


	// $active_group = $row['dbname'];
	// $active_record = TRUE;
	
	// $db[$row['dbname']]['hostname'] = $row['hostname'];
	// $db[$row['dbname']]['username'] = 'root';
	// $db[$row['dbname']]['password'] = '';
	// $db[$row['dbname']]['database'] = $row['dbname'];
	// $db[$row['dbname']]['dbdriver'] = 'mysqli';
	// $db[$row['dbname']]['dbprefix'] = "";
	// $db[$row['dbname']]['pconnect'] = TRUE;
	// $db[$row['dbname']]['db_debug'] = TRUE;
	// $db[$row['dbname']]['cache_on'] = FALSE;
	// $db[$row['dbname']]['cachedir'] = "";
	// $db[$row['dbname']]['char_set'] = "utf8";
	// $db[$row['dbname']]['dbcollat'] = "utf8_general_ci";
	// $db[$row['dbname']]['swap_pre'] = '';
	// $db[$row['dbname']]['autoinit'] = TRUE;
	// $db[$row['dbname']]['stricton'] = FALSE;
// }


// mysqli_close($connection);



$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'shops_main',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
