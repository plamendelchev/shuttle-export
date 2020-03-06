<?php 
include('dumper.php');
require_once('wp-config.php');

try {
	$world_dumper = Shuttle_Dumper::create(array(
		'host' => DB_HOST,
		'username' => DB_USER,
		'password' => DB_PASSWORD,
		'db_name' => DB_NAME,
	));

	// dump the database to gzipped file
	$world_dumper->dump('d.sql');

} catch(Shuttle_Exception $e) {
	echo "Couldn't dump database: " . $e->getMessage();
}
