<?php

namespace Mestizo;

use \Doctrine\ORM\Tools\Setup;
use \Doctrine\ORM\EntityManager;
use \Exception;
use \DirectoryIterator;

class Mestizo
{
	private $em;

	public function __construct(){

		$models = array();
		$dir = new DirectoryIterator(__DIR__.'/Models');
		foreach($dir as $file){
			if($file->isFile()){
				$models[] = $file->getPathname();
			}
		}

		$devMode = false;
		$config = Setup::createAnnotationMetadataConfiguration($models, $devMode);
		//$config->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
		$this->em = EntityManager::create(array(
		    //'user'=>'',
		    //'password'=>'',
		    'path'=>dirname(__DIR__).'/../config/mestizo.db',
		    //'memory'=>'false',
		    'driver'=>'pdo_sqlite'
		), $config);
	}

	public function persist($obj){
		$this->em->persist($obj);
		$this->em->flush();
	}

	public function remove($obj){
		$this->em->remove($obj);
		$this->em->flush();
	}
}
