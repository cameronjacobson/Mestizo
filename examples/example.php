<?php

require_once(dirname(__DIR__).'/vendor/autoload.php');

use Mestizo\Mestizo;
use Mestizo\Models\Setting;

$mestizo = new Mestizo();

// ADD
$setting = new Setting();
$setting->key = 'key';
$setting->value = 'value';
$mestizo->persist($setting);

// UPDATE
$setting->key = 'key2';
$mestizo->persist($setting);

// DELETE
$mestizo->remove($setting);
