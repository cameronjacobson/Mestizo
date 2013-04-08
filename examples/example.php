<?php

require_once(dirname(__DIR__).'/vendor/autoload.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Mestizo\Mestizo;
use Mestizo\Models\Setting;

$paths = array(
	dirname(__DIR__).'/src/Mestizo/Models/Directory.php',
	dirname(__DIR__).'/src/Mestizo/Models/Filter.php',
	dirname(__DIR__).'/src/Mestizo/Models/Handler.php',
	dirname(__DIR__).'/src/Mestizo/Models/Host.php',
	dirname(__DIR__).'/src/Mestizo/Models/Log.php',
	dirname(__DIR__).'/src/Mestizo/Models/Mimetype.php',
	dirname(__DIR__).'/src/Mestizo/Models/Proxy.php',
	dirname(__DIR__).'/src/Mestizo/Models/Route.php',
	dirname(__DIR__).'/src/Mestizo/Models/Server.php',
	dirname(__DIR__).'/src/Mestizo/Models/Setting.php',
	dirname(__DIR__).'/src/Mestizo/Models/Statistic.php'
);
$isDevMode = false;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$config->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
$em = EntityManager::create(array(
	//'user'=>'',
	//'password'=>'',
	'path'=>dirname(__DIR__).'/config/mestizo.db',
	//'memory'=>'false',
	'driver'=>'pdo_sqlite'
), $config);

$setting = new Setting();
$setting->key = 'key';
$setting->value = 'value';
$em->persist($setting);
$em->flush();

$em->remove($setting);
$em->flush();

var_dump($setting);
//$mestizo = new Mestizo($em);


