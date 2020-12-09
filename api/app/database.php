<?php
declare(strict_types=1);

use Illuminate\Database\Capsule\Manager as Capsule;

$dbSettings = $container->get('settings')['db'];
$capsule = new Capsule;
$capsule->addConnection($dbSettings);
$capsule->bootEloquent();
$capsule->setAsGlobal();