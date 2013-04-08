<?php

namespace Mestizo;

use \PDO;
use \PDOStatement;
use \PDOException;
use \Exception;

class Mestizo
{
	public function __construct(){
		$dbfile = dirname(__DIR__).'/../config/mestizo.db';
		if(!file_exists($dbfile)){
			throw new Exception('Database not found.  Run bin/initdb to proceed.');
		}

		
	}
}
