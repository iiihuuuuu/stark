<?php

require_once 'connection.class.php';
require_once '../config/config.php';

class Database extends Connection {
	
	public function __construct() {
		parent::__construct(USERNAME,PASSWORD,HOST,DBNAME);
		//parent::__construct("root","secret","mysql-server","ad");
    }

}
