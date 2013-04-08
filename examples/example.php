<?php

require_once(dirname(__DIR__).'/vendor/autoload.php');

use Mestizo\Mestizo;
use Mestizo\Models\Setting;

$setting = new Setting();
$setting->key = 'key';
$setting->value = 'value';

$mestizo = new Mestizo();

$mestizo->persist($setting);
$mestizo->remove($setting);
