<?php

require_once 'connection.class.php';
require_once '../conf/dbconfig.php';

class Database extends Connection {
	
	public function __construct() {
		parent::__construct($username,$password,$host,$dbname);
		//parent::__construct("root","secret","mysql-server","ad");
    }

}
