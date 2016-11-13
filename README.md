Credit Card CRUD
===================

----------


Documents
-------------

 1. Import Sql File
 
		import sql file yang terdapat pada `sql/creditcard.sql`
    
 2. Setting DataBase

	Buka file `application\config\database.php`
		
	ubah pada baris
	

    $db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'creditcard',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
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

 
 3. Setting Base Route
	Buka file `application\config\routes.php`
		
	ubah pada baris
	

    $config['base_url'] = 'http://'.$_SERVER['HTTP_HOST'].'/creditcard';