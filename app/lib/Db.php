<?php

namespace app\lib;

use PDO;
use PDOException;

class Db {
	
	protected $pdo;
	
	public function __construct() {
		require "app/config/db.php";
		try {
			$this->pdo = new PDO("mysql:host=$DB_HOST;charset=$DB_CHARSET", $DB_USER_NAME, $DB_USER_PASSWORD);

			if (!$this->pdo->query("SHOW DATABASES LIKE $DB_NAME")) {
				// echo"creating DB";
				// exit();
				$this->pdo->query("CREATE DATABASE $DB_NAME");
				$this->pdo->exec("use $DB_NAME");
				$this->setupDb();

			}
		} catch (PDOException $e) {
			echo 'DB_ERROR: '.$e->getMessage();
		}
	
	}

	public function setupDb() {
		$tmpline = "";
		$lines = file("app/config/setup_db.sql");
		foreach ($lines as $line) {
			if (substr($line, 0, 2) == '--' || $line == '')
				continue;
			$tmpline .= $line;
			if (substr(trim($line), -1, 1) == ';') {
				$this->query($tmpline);
				$tmpline = "";
			}
		}
	}

	public function getConnection() {
		return $this->pdo;
	}

	public function query($sql, $params = []) {
		$statement = $this->pdo->prepare($sql);
		$statement->execute($params);
		return $statement->fetchAll();
	}

}