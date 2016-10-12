<?
class DATABASE_CONFIG { 

	var$default=array( 
		'driver'=>'mysql', 
		'persistent'=>false, 
		'host'=>'localhost', 
		'port'=>'', 
		'login'=>'root', 
		'password'=>'root', 
		'database'=>'cake', 
		'schema'=>'', 
		'prefix'=>'', 
		'encoding'=>'' 
	); 

	var $test = array( 
		'driver'=>'mysql', 
		'persistent' => false, 
		'host' => 'localhost', 
		'port'=>'', 
		'login'=>'root', 
		'password' => 'root', 
		'database'=>'cake-test', 
		'schema'=>'', 
		'prefix' => '' 
		'encoding'=>'' 
	); 
}
?>