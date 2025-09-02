<?php

class Database {
	private static ?Database $instance = null;
	private function __construct() {}
	public static function getInstance(): Database { if (self::$instance === null) { self::$instance = new Database(); } return self::$instance; }
}

$db1 = Database::getInstance();
$db2 = Database::getInstance();
echo 'Singleton: '.(($db1 === $db2) ? 'OK' : 'KO')."\n";
