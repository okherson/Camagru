<?php
	namespace app\core;

	use app\lib\Db;

	abstract class Model {

		protected $db;
		protected $pdo;

		public function  __construct() {
			$this->db = new Db;
			$this->pdo = $this->db->getConnection();
		}
	}
?>
